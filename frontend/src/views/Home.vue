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
        
        <Table />
    </main>
</template>

<script setup>
import Table from '../components/Table.vue';
</script>

<style lang="scss">

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
    -webkit-box-shadow: 10px 9px 35px 0px rgba(103,219,70,1);
  -moz-box-shadow: 10px 9px 35px 0px rgba(103,219,70,1);
  box-shadow: 10px 9px 35px 0px rgba(103,219,70,1);

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
</style>