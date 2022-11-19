<template>
  <div>
    <div class="create text-right">
        <ModalVue />
      </div>
    <div class="table-content-content">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full rounded-sm ">
          <thead class="border-b rounded-sm">
            <tr class="text-align-center rounded-sm ">
              <th scope="col" class="text-sm font-medium  px-6 py-4   text-center">
                #
              </th>
              <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                First
              </th>
              <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                Last
              </th>
              <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                Handle
              </th>
              <th scope="col" class="text-sm font-medium  px-6 py-4 text-center">
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
              <td class="text-sm text-white font-light whitespace-nowrap">
               <button class="myButton">Edit</button>  | <button class="myButton">Delete</button> 
              </td>
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white rounded-sm">1</td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
  
</template>

<script setup>
import ModalVue from './Modal.vue';
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
  width: 50%;
  background-color: var(--dark);
  color: var(--primary);
  -webkit-box-shadow: 10px 9px 35px 0px rgba(103,219,70,1);
  -moz-box-shadow: 10px 9px 35px 0px rgba(103,219,70,1);
  box-shadow: 10px 9px 35px 0px rgba(103,219,70,1);
}

table tr th,
table tr td {
  padding: 1rem;
}

.create{
  margin: 40px 10px 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  width: 200px;
  text-align: center;
  background-color: var(--dark);
  color: var(--primary);
  transition: 0.3s ease-in-out;
  
}

.create:hover{
    cursor: pointer;
    margin-left:2rem ;
  }

</style>