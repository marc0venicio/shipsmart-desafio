<script setup>
import SidebarVue from './components/Sidebar.vue';
import NavBar from './components/Navbar.vue';
</script>

<template>
  <div class="app">
    <SidebarVue />
    <div class="header">
     <NavBar />
    <RouterView></RouterView> 
    </div>
    
  </div>
</template>

<style lang="scss">

:root {
  --primary: #4ade80;
	--primary-alt: #22c55e;
	--grey: #64748b;
	--dark: #1e293b;
	--dark-alt: #334155;
	--light: #f1f5f9;
	--sidebar-width: 300px;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Fira sans', sans-serif;
}

body {
  background: var(--light);
}

button {
  cursor: pointer;
  appearance: none;
  border: none;
  outline: none;
  background: none;
}

  .myButton {
	box-shadow:inset 0px 39px 0px -24px var(--primary-alt);
	background-color:var(--primary);
  width: 70px;
  height: 30px;
	border-radius:4px;
	border:1px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	text-decoration:none;
	text-shadow:0px 1px 0px var(--dark);
}
.myButton:hover {
	background-color:var(--primary);
}
.myButton:active {
	position:relative;
	top:1px;
}
.app {
  display: flex;
  main {
    flex: 1 1 0;
    padding: 2rem;

    @media (max-width: 768px){
      padding-left: 6rem;
    }
  }
}

.header {
  width: 100%;
}
</style>
