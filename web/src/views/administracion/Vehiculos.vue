<template>
  <div>
    <v-data-table
      :headers="headers"
      :items="items"
      :server-items-length="total"
      sort-by="id"
      class="elevation-1"
      @update:options="actualizarOpcionesTabla"
      :footer-props="{
        pageText: '{0}-{1} de {2}',
        'items-per-page-text': 'Elementos por página',
      }"
    >
      <template v-slot:no-data> Sin registros </template>
      <template v-slot:top>
        <v-toolbar flat>
          <v-toolbar-title class="text-capitalize"> Vehiculos </v-toolbar-title>
          <v-divider class="mx-4" inset vertical></v-divider>
          <v-spacer></v-spacer>
          <v-btn
            icon
            class="mr-2"
            @click="withTrashed = !withTrashed"
            title="Mostrar registros eliminados"
          >
            <v-icon :color="withTrashed ? 'red darken-2' : 'grey'">
              mdi-archive-lock-open-outline
            </v-icon>
          </v-btn>
          <v-dialog v-model="dialog" max-width="600px" persistent>
            <template v-slot:activator="{ on, attrs }">
              <v-btn
                color="red darken-2"
                dark
                class="mb-2"
                v-bind="attrs"
                v-on="on"
              >
                <v-icon class="mr-1"> mdi-plus-box </v-icon>
                Nuevo registro
              </v-btn>
            </template>

            <v-card>
              <v-card-title class="">
                {{ formTitle }}
              </v-card-title>
              <v-card-text>
                <v-form ref="form_vehiculo">
                  <v-container>
                    <v-row>
                      <v-col class="mt-2 pb-0" cols="12" sm="12">
                        <v-text-field
                          :rules="[textRule]"
                          v-model="editedItem.nombre"
                          label="Ingrese el nombre*"
                          outlined
                        >
                        </v-text-field>
                      </v-col>
                      <v-col class="mt-2 pb-0" cols="12" sm="12">
                        <v-text-field
                          v-model="editedItem.nomenclatura"
                          label="Ingrese la nomenclatura"
                          outlined
                        >
                        </v-text-field>
                      </v-col>
                      <v-col class="pb-0" cols="12" sm="12">
                        <v-text-field
                          v-model="editedItem.descripcion"
                          label="Ingrese descripción"
                          outlined
                        >
                        </v-text-field>
                      </v-col>
                    </v-row>
                  </v-container>
                </v-form>
              </v-card-text>

              <v-card-actions class="py-5">
                <v-spacer></v-spacer>
                <v-btn text @click="close()"> Cancelar </v-btn>
                <v-btn
                  class="red darken-1"
                  text
                  @click="save()"
                  v-if="editedIndex == -1"
                  dark
                >
                  Guardar
                </v-btn>
                <v-btn
                  class="red darken-1"
                  text
                  @click="update(editedItem)"
                  v-else
                  dark
                >
                  Actualizar
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-toolbar>
      </template>

      <template v-slot:item.actions="{ item }">
        <v-icon v-if="!item.fecha_eliminado" @click="editItem(item)">
          mdi-pencil
        </v-icon>
        <v-icon
          v-if="item.fecha_eliminado"
          @click="restoreItemDialog(item)"
          color="grey"
        >
          mdi-delete-restore
        </v-icon>
        <v-icon v-else color="red lighten-2" @click="deleteItemConfirm(item)">
          mdi-delete
        </v-icon>
      </template>
    </v-data-table>

    <v-dialog v-model="dialogDelete" max-width="530px">
      <v-card>
        <v-card-title class="text-h5">
          ¿Quiere eliminar el registro {{ editedItem.nombre }}?
        </v-card-title>
        <v-card-actions class="py-3">
          <v-spacer></v-spacer>
          <v-btn text color="red darken-1" @click="deleteItem">Aceptar</v-btn>
          <v-btn text color="gray darken-1" @click="dialogDelete = false">
            Cancelar
          </v-btn>
          <v-spacer></v-spacer>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-dialog v-model="restoreDialog" max-width="530px">
      <v-card>
        <v-card-title class="text-h5">
          ¿Quiere restaurar el registro {{ editedItem.nombre }}?
        </v-card-title>
        <v-card-actions class="py-3">
          <v-spacer></v-spacer>
          <v-btn text color="red darken-1" @click="restoreItem">Aceptar</v-btn>
          <v-btn text color="gray darken-1" @click="restoreDialog = false">
            Cancelar
          </v-btn>
          <v-spacer></v-spacer>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
<script>
import { string } from '../../http/Validation';

export default {
  data() {
    return {
      withTrashed: false,
      restoreDialog: false,
      limit: 10,
      page: 1,
      total: 0,
      headers: [
        {
          text: 'Nombre',
          align: 'start',
          value: 'nombre',
        },
        { text: 'Nomenclatura', align: 'center', value: 'nomenclatura' },
        { text: 'Descripción', align: 'center', value: 'descripcion' },
        {
          text: 'Acciones',
          align: 'right',
          value: 'actions',
          sortable: false,
        },
      ],
      items: [],
      clases: [],
      dialog: false,
      dialogDelete: false,
      editedIndex: -1,
      editedItem: {},
      defaultItem: {
        nombre: '',
        id_clase: null,
        nomenclatura: '',
        cantidad_ejes: null,
        peso_maximo: null,
        longitud_maxima: null,
        descripcion: '',
      },
    };
  },

  computed: {
    formTitle() {
      return this.editedIndex === -1 ? 'Registrar Vehiculo' : 'Editar Vehiculo';
    },
  },

  watch: {
    withTrashed() {
      this.initialize();
    },
  },

  methods: {
    textRule: string('El campo es requerido'),

    async initialize() {
      const {
        data: {
          data,
          meta: { total },
        },
      } = await this.axios.get('/vehiculos', {
        params: {
          with_trashed: this.withTrashed,
          limit: this.limit,
          page: this.page,
        },
      });
      this.items = data;
      this.total = total;
    },

    async save() {
      try {
        const validate = this.$refs.form_vehiculo.validate();
        if (validate) {
          await this.axios.post('/vehiculos', this.editedItem);
          this.initialize();
          this.$toast.success('Registro creado');
          this.close();
        }
      } catch (error) {
        this.$toast.error('Error al crear el vehículo');
      }
    },

    editItem(item) {
      this.editedIndex = this.items.indexOf(item);
      this.editedItem = { ...item };
      this.dialog = true;
    },

    async update(item) {
      try {
        const validate = this.$refs.form_vehiculo.validate();
        if (validate) {
          await this.axios.put(`/vehiculos/${item.id}`, this.editedItem);
          this.initialize();
          this.$toast.success('Registro actualizado');
          this.close();
        }
      } catch (error) {
        this.$toast.error('Error al actualizar el vehículo');
      }
    },

    deleteItemConfirm(item) {
      this.editedItem.id = item.id;
      this.editedItem.nombre = item.nombre;
      this.dialogDelete = true;
    },

    async deleteItem() {
      try {
        await this.axios.delete(`/vehiculos/${this.editedItem.id}`);
        this.$toast.success('Registro eliminado');
        this.initialize();
        this.dialogDelete = false;
      } catch (error) {
        this.$toast.error('Error al eliminar el vehículo');
      }
    },

    restoreItemDialog(item) {
      this.editedItem.id = item.id;
      this.editedItem.nombre = item.nombre;
      this.restoreDialog = true;
    },

    async restoreItem() {
      try {
        await this.axios.post(`/vehiculos/${this.editedItem.id}/restore`);
        this.$toast.success('Registro restaurado');
        this.restoreDialog = false;
        this.initialize();
      } catch (error) {
        this.$toast.error('Error al restaurar el vehiculo');
      }
    },

    actualizarOpcionesTabla(config) {
      if (config.page !== this.page) {
        this.page = config.page;
        this.initialize();
      }

      if (config.itemsPerPage !== this.limit) {
        this.limit = config.itemsPerPage;
        this.initialize();
      }
    },

    close() {
      this.dialog = false;
      this.$nextTick(() => {
        this.editedItem = { ...this.defaultItem };
        this.editedIndex = -1;
      });
      this.$refs.form_vehiculo.reset();
    },
  },

  created() {
    this.initialize();
  },
};
</script>
