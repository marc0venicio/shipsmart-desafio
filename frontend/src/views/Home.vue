<template>
  <main class="home-page">
    <div class="cards">
      <div class="card-item">
        <div class="title">
          <span class="material-icons">
            phone_in_talk
          </span>
          <span>Contatos</span>
        </div>

        <h2>250</h2>
        <div class="title">
          <p>+15%</p>
          <span class="material-icons">arrow_upward</span>
        </div>
      </div>
      <div class="card-item">
        <div class="title">
          <span class="material-icons">
            phone_in_talk
          </span>
          <span>Contatos</span>
        </div>

        <h2>250</h2>
        <div class="title">
          <p>+15%</p>
          <span class="material-icons">arrow_upward</span>
        </div>
      </div>
      <div class="card-item">
        <div class="title">
          <span class="material-icons">
            phone_in_talk
          </span>
          <span>Contatos</span>
        </div>

        <h2>250</h2>
        <div class="title">
          <p>+15%</p>
          <span class="material-icons">arrow_upward</span>
        </div>
      </div>
      <div class="card-item">
        <div class="title">
          <span class="material-icons">
            phone_in_talk
          </span>
          <span>Contatos</span>
        </div>

        <h2>250</h2>
        <div class="title">
          <p>+15%</p>
          <span class="material-icons">arrow_upward</span>
        </div>
      </div>
    </div>
    <div class="flex flex-row justify-between gap-10">
      <Table :edit="edit" @change-edit="handleEdit" @change-update="handleUpdate" :addressForm="address" />
      <div class="mt-8 ">
        <div class="create-or-update max-w-5xl p-6 rounded-md shadow-xl">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl"> Address </h3>
          </div>
          <div class="mt-4">
            <form class="w-full max-w-xg">
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/3 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-nome">
                    Nome
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-nome" type="text" placeholder="joe" v-model="address.nome">
                </div>
                <div class="w-full md:w-1/3 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-cep">
                    Cep
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-cep" type="text" placeholder="69088-438" v-model="address.cep" v-on:blur="handleBlur(address.cep)">
                </div>
                <div class="w-full md:w-1/3 mb-6 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-estado">
                    Estado
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-estado" type="text" placeholder="Doe" v-model="address.estado">
                </div>
                <div class="w-full md:w-1/3 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-cidade">
                    Cidade
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-cidade" type="text" placeholder="Doe" v-model="address.cidade">
                </div>
                <div class="w-full md:w-1/3 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-bairro">
                    Bairro
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-bairro" type="text" placeholder="Doe" v-model="address.bairro">
                </div>
                <div class="w-full md:w-1/3  px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-rua">
                    Rua
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-rua" type="text" placeholder="Doe" v-model="address.rua">
                </div>
                <div class="w-full md:w-1/2 mt-6 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-rua">
                    Número
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-rua" type="number" placeholder="Doe" v-model="address.numero">
                </div>
                <div class="w-full md:w-1/4 align-middle justify-center items-center text-left mt-6 px-3">
                  <span class="text-white">Adicionar contato</span><br />
                  <span class="material-icons mt-3 cursor-pointer" @click="AddContacts">add</span>
                </div>
                <div v-for="(value, key) in address.contact" :key="value" class="w-full md:w-1/3 mt-6 px-3">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-contato">
                    Contato {{ key }}
                  </label>
                  
                  <input v-if="edit"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-contato" type="string" placeholder="edit 98 984416297" v-model="value.telephone">

                    <input v-else
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-contato" type="string" placeholder="98 984416297" v-model="address.contact[key]">
                </div>
              </div>

            </form>
            <button @click="isOpen = false" class="px-6 py-2 text-red border border-[#4ade80] rounded">
              Cancel
            </button>
            <button @click="this.edit ? handleUpdate(address.id, address) : saveaddress()" class="px-6 py-2 ml-2 bg-[#4ade80] text-white rounded">
              {{edit ? "Editar" : "Cadastrar"}}
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import Table from '../components/Table.vue';
import Pagination from '../components/Pagination.vue';
import DataService from '../services/DataService';
import Form from '../Form';
export default {
  components: {
    Table,
    Pagination
  },
  data() {
    return {
      isOpen: false,
      address: new Form({
        id: null,
        nome: "",
        cep: "",
        estado: "",
        cidade: "",
        bairro: "",
        rua: "",
        numero: "",
        contact: []
      }),
      edit: false,
      offset: 1,
      limit: 5,
      total: 0,
    };
  },

  methods: {
    handleEdit() {
      this.edit = true;
    },
    saveaddress() {

      var data = {
        nome: this.address.nome,
        cep: this.address.cep,
        estado: this.address.estado,
        cidade: this.address.cidade,
        bairro: this.address.bairro,
        rua: this.address.rua,
        numero: this.address.numero,
        contact: this.address.contact
      };

      console.log("chegou")

      DataService.create(data)
        .then(response => {
          // console.log(response.data);
          this.submitted = true;
          window.alert('Cadastrado com sucesso');
          window.location.reload();

        })
        .catch(e => {
          console.log(e);
        });
    },

    AddContacts() {
      this.address.contact.length += 1;
      // console.log(this.address.contact.length)
    },

    handleBlur(cep){
      console.log("cheogu on bluer")
      DataService.buscaCep(cep)
        .then(response => {
          console.log(response.data.data)
          this.address.estado = response.data.data.state;
          this.address.rua = response.data.data.address_type +' '+ response.data.data.address_name;
          this.address.cidade = response.data.data.city;
          this.address.bairro = response.data.data.district;
        })
        .catch(e => {
          console.log(e);
        });
    },

    handleUpdate(id, data){
      console.log(data)
      let contact = data.contact.map((value, index) =>{
        return value.telephone
      })

      let realData = {
        bairro: data.bairro,
        cep: data.cep,
        cidade: data.cidade,
        estado: data.estado,
        rua: data.rua,
        contact: contact,
        id: data.id,
        nome: data.nome,
        numero: data.numero
      }
      console.log(realData)
      DataService.update(id, realData)
        .then(response => {
          console.log(response.data);
          window.alert('atualizado com sucesso');
          window.location.reload();

        })
        .catch(e => {
          console.log(e);
        });
    }
  }
};

</script>

<style lang="scss" scoped>
.cards {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.card-item {
  display: flex;
  flex-direction: column;
  min-width: 300px;
  color: var(--light);
  background-color: var(--dark);
  padding-bottom: 5px;
  -webkit-box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
  -moz-box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
  box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);

  .material-icons {
    font-size: 30px;
    margin: 10px;
  }

  .title {
    display: flex;
    flex-direction: row;
    align-items: center;

    &.card-bottom {
      align-content: center;
    }
  }

  h2 {
    text-align: center;
    font-size: 40px;
  }

  p {
    margin: 10px;
  }


}

.create-or-update {
  background-color: var(--dark);
  color: var(--primary);
  -webkit-box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
  -moz-box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
  box-shadow: 10px 9px 35px 0px rgba(103, 219, 70, 1);
}
</style>