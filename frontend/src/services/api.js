const API_URL = 'http://localhost:8080';

export default {
  async post(endpoint, body) {
    if(typeof endpoint === 'string' && typeof body === 'object') {
      await fetch(API_URL + endpoint + '.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(body)
      })
    }
  },
  async get(endpoint, params) {
    if(typeof endpoint === 'string') {
      const GET_URL = new URL(API_URL + endpoint + '.php');
      if(Object.keys(params).length) {
        Object.keys(params).forEach(key => GET_URL.searchParams.append(key, params[key]));
      }
      await fetch(GET_URL.href, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json;charset=utf-8'
        }
      })
    }
  }
}