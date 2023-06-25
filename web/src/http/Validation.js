import Joi from 'joi';

export const permisosDefault = 118;

function validate(schema) {
  // eslint-disable-next-line func-names
  return function (value) {
    const {
      error,
    } = schema.validate(value);
    if (!error) return true;
    return error.message || 'Campo requerido.';
  };
}

export function alphaString(message = 'Campo requerido.') {
  const schema = Joi.string().alphanum().required()
    .error(new Error(message));
  return validate(schema);
}

export function string(message = 'Campo requerido.') {
  const schema = Joi.string().required()
    .error(new Error(message));

  return validate(schema);
}
/*
    ^                         Start anchor
    (?=.*[A-Z])               Ensure string has one uppercase letters.
    (?=.*[!@#$&*])            Ensure string has one special case letter.
    (?=.*[0-9])               Ensure string has one digits.
    (?=.*[a-z].*[a-z].*[a-z]) Ensure string has three lowercase letters.
    .{8,}                     Ensure string is of length 8.
                              Para cualquiera que quiera una longitud de al menos
    $                         End anchor.
*/
export function password(message = 'Campo requerido.') {
  const schema = Joi.string().pattern(new RegExp(
    /^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,}$/,
  ))
    .error(new Error(message));

  return validate(schema);
}

export function passwordLogin(message = 'Campo requerido.') {
  const schema = Joi.string().pattern(new RegExp(/^(?=.*).{8,}$/))
    .error(new Error(message));

  return validate(schema);
}

export function integer(message = 'Campo requerido.') {
  const schema = Joi.number().integer().min(0).required()
    .error(new Error(message));

  return validate(schema);
}

export function number(message = 'Campo requerido.') {
  const schema = Joi.number().min(0).required()
    .error(new Error(message));

  return validate(schema);
}

export function email(message = 'Campo requerido.') {
  const schema = Joi.string().email({
    allowUnicode: false,
    minDomainSegments: 2,
    tlds: {
      allow: true,
      deny: [],
    },
  }).required().pattern(new RegExp(/^(\*(@[a-zA-Z0-9_.]+)?|[a-zA-Z0-9_@.]+)$/))
    .error(new Error(message));

  return validate(schema);
}
