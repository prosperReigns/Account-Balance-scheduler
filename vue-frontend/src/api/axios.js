import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://localhost:8000/api', // Change if your backend URL is different
});

export default instance;
