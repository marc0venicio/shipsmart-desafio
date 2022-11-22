<template>
  <div class="container mx-auto">
    <div class="flex justify-center">
      <button @click="isOpen = true" class="px-6 py-2 text-white rounded shadow" type="button">
        {{edit ? "Editar" : "Adicionar"}}
      </button>

      <div v-show="isOpen" class="
            absolute
            inset-0
            flex
            items-center
            justify-center
            bg-gray-700 bg-opacity-50
          ">
        <div class="max-w-5xl p-6 bg-white rounded-md shadow-xl">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl">{{edit ? "Editar" : "Adicionar"}} User</h3>
            <svg @click="isOpen = false" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-900 cursor-pointer"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="mt-4">
            <form class="w-full max-w-lg">
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nome">
                    Nome
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-nome" type="text" placeholder="joe"  v-model="address.nome">
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cep">
                    Cep
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-cep" type="text" placeholder="69088-438"  v-model="address.cep">
                </div>
                <div class="w-full md:w-1/2 mt-6 mb-6 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-estado">
                    Estado
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-estado" type="text" placeholder="Doe" v-model="address.estado">
                </div>
                <div class="w-full md:w-1/2 mt-6 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-cidade">
                    Cidade
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-cidade" type="text" placeholder="Doe" v-model="address.cidade">
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-bairro">
                    Bairro
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-bairro" type="text" placeholder="Doe" v-model="address.bairro">
                </div>
                <div class="w-full md:w-1/2  px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-rua">
                    Rua
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-rua" type="text" placeholder="Doe" v-model="address.rua">
                </div>
                <div class="w-full md:w-1/2 mt-6 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-rua">
                    Número
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-rua" type="number" placeholder="Doe" v-model="address.numero">
                </div>
                <div class="w-full md:w-1/2 mt-6 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-contato">
                    Contato
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-contato" type="number" placeholder="Doe"  v-model="address.contact[0]">
                </div>
              </div>

            </form>
            <button @click="isOpen = false" class="px-6 py-2 text-[#4ade80] border border-[#4ade80] rounded">
              Cancel
            </button>
            <button @click="saveaddress" class="px-6 py-2 ml-2 bg-[#4ade80] rounded">
              Save
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script >
import DataService from '../services/DataService';
export default {
  props: {
    edit: {
      type: [Boolean],
      default: false
    }
  },
  data() {
    return {
      isOpen: false,
      address: {
        id: null,
        nome: "",
        cep: "",
        estado: "",
        cidade: "",
        bairro: "",
        rua: "",
        numero: "",
        contact:  ['234234234234']
      },
      submitted: false
    };
  },

  methods: {
    saveaddress() {
      
      console.log(this.address)
      // return true;
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

      DataService.create(data)
        .then(response => {
          console.log(response.data);
          this.submitted = true;
        })
        .catch(e => {
          console.log(e);
        });
    },
  }
};

</script>

<style lang="scss" scoped>
.container {
  color: var(--dark);
}
</style>