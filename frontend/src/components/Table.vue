<template>
  <div>
    <!-- <div class="create text-right">
      <ModalVue />
    </div> -->
    <div class="table-content-content ">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden ">
            <table class="min-w-full rounded-sm ">
              <thead class="border-b rounded-sm">
                <tr class="text-align-center rounded-sm ">
                  <th scope="col" class="text-sm font-medium  px-6 py-4   text-center">
                    Id
                  </th>
                  <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                    Nome
                  </th>
                  <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                    CEP
                  </th>
                  <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                    Estado
                  </th>
                  <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                    Cidade
                  </th>
                  <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                    Contatos
                  </th>
                  <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b text-center" v-for="(value, index) in address" :key="value.id">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">{{ value.id }}</td>
                  <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                    {{ value.nome }}
                  </td>
                  <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                    {{ value.cep }}
                  </td>
                  <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                    {{ value.estado }}
                  </td>
                  <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                    {{ value.cidade }}
                  </td>
                  <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                    <div v-for="(telephones, key) in value.telephone" :key="telephones.id">
                      {{ telephones.telephone }}
                    </div>
                  </td>
                  <td class="text-sm text-white font-light whitespace-nowrap">
                    <div class="flex flex-row align-middle gap-1">
                      <span class="cursor-pointer" @click="handleUpdate(value, index)">edit</span> | <span class="cursor-pointer" @click="deleteAddress(value.id )">delete</span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="flex flex-row justify-end text-right text-justify-right my-3 mx-3">
              <pagination v-if="address.length" :offset="offset" :total="total" :limit="limit"
                @change-page="changePage" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script >
import ModalVue from './Modal.vue';
import Pagination from './Pagination.vue';
import DataService from '../services/DataService';

export default {
  props: {
    addressForm: {
      type: Array,
      default: []
    },
    edit: {
      type: [String, Boolean],
      default: false
    }

  },
  components: {
    ModalVue,
    Pagination
  },
  name: "address-list",
  data() {
    return {
      address: [],
      currentaddress: null,
      currentIndex: -1,
      offset: 1,
      limit: 5,
      total: 0,
    };
  },
  methods: {
    handleEdit(index) {
      this.$emit('change-edit', index);
    },
    handleUpdate(data) {
      this.$emit('change-update', index);
    },
    retrieveaddress() {
      console.log(this.addressForm)
      DataService.getAll(this.limit, this.offset)
        .then(response => {
          this.address = response.data.data;
          this.total = response.data.pagination.total;
        })
        .catch(e => {
          console.log(e);
        });
    },
    handleUpdate(value, index) {
      console.log(value)
      if (typeof index !== "undefined") {
        this.handleEdit(true)
        let registro = this.address[index];
        console.log(registro.telephone)
        this.addressForm.id = registro.id;
        this.addressForm.nome = registro.nome;
        this.addressForm.cep = registro.cep;
        this.addressForm.estado = registro.estado;
        this.addressForm.cidade = registro.cidade;
        this.addressForm.bairro = registro.bairro;
        this.addressForm.rua = registro.rua;
        this.addressForm.numero = registro.numero;
        this.addressForm.contact = registro.telephone;
      }
      else {
        this.addressForm.reset();
      }
    },
    refreshList() {
      this.retrieveaddress();
    },

    changePage(value) {
      this.offset = value;
      this.refreshList();
    },

    setActiveaddress(address, index) {
      this.currentaddress = address;
      this.currentIndex = address ? index : -1;
    },

    deleteAddress(id) {
      DataService.delete(id)
        .then(response => {
          console.log(response.data);
          this.refreshList();
        })
        .catch(e => {
          console.log(e);
        });
    },

  },
  mounted() {
    this.retrieveaddress();
  }
};


</script>

<style lang="scss" scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  border-radius: 6px;
}

.table-content-content {
  margin-top: 2rem;
  width: 100%;
  background-color: var(--dark);
  color: var(--primary);
  -webkit-box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
  -moz-box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
  box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
}

table tr th,
table tr td {
  padding: 1rem;
}

.create {
  margin: 40px 10px 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  width: 200px;
  text-align: center;
  background-color: var(--dark);
  color: var(--primary);
  transition: 0.3s ease-in-out;

}

.create:hover {
  cursor: pointer;
  margin-left: 2rem;
}
</style>