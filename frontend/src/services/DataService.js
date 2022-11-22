import http from "../http-common";

class DataService {
  getAll(limit, offset) {
    return http.get(`/address?sort=-id&limit=${limit}&offset=${offset}&config=meta-total-count`);
  }

  get(id) {
    return http.get(`/address/${id}`);
  }

  create(data) {
    return http.post("/address", data);
  }

  update(id, data) {
    return http.put(`/address/${id}`, data);
  }

  delete(id) {
    return http.delete(`/address/${id}`);
  }

  buscaCep(cep) {
    return http.get(`/buscacep/${cep}`);
  }

}

export default new DataService();
