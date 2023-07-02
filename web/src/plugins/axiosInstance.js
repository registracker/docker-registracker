import axios from 'axios';

const token = localStorage.getItem('token');

const instance = axios.create({
  baseURL: '/api',
  timeout: 10000,
  headers: { Authorization: `Bearer ${token}` },
});

instance.interceptors.request.use((config) => config, (error) => Promise.reject(error));

instance.interceptors.response.use((response) => response, (error) => Promise.reject(error));

export default instance;
