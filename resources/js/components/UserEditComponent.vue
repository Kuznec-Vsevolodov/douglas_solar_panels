<template>
    <div class="col-6">
        <div class="card">
            <h5>User setting up</h5>
            <div class="grid p-fluid">
                <div class="col-12 md:col-4">
                    <div class="p-inputgroup">
                        <span class="p-inputgroup-addon">
                            <i class="pi pi-user"></i>
                        </span>
                        <InputText placeholder="Username" v-model="userData.username" />
                    </div>
                    <div class="email-field p-inputgroup">
                        <InputText placeholder="Email" v-model="userData.email" />
                    </div>
                    <div class="field col-12 md:col-4">
                        <Password v-model="userData.password" placeholder="Password" />
                    </div>
                    <div class="field col-12 md:col-4" style="margin-top: 15px;">
                        <InputMask mask="(999) 999-9999" v-model="userData.phone" placeholder="(999) 999-9999" />
                    </div>
                    <Button style="margin-top: 10px;" label="Save" @click="editUser()" class="p-button-primary" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import InputText from 'primevue/inputtext';
import Password from 'primevue/password';
import Button from 'primevue/button';
import InputMask from 'primevue/inputmask';

export default {
    components: {
        InputText,
        Password,
        Button,
        InputMask
    },
    props: {
        userId: {
            Number,
            default: 0
        }
    },
    data() {
        return {
            userData: {
                username: null,
                email: null,
                password: null,
                phone: null
            }
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        editUser() {
            axios.post('/add-new-model', {
                userData: this.userData,
                id: this.userId
            }).then(function (response) {
                console.log(response);
            })
        }
    }
}
</script>

<style lang="scss" scoped>
.card {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 10px;
    padding-right: 10px;
}

.email-field {
    margin-top: 15px;
    margin-bottom: 15px;
}

.field {
    padding: 0px;
}

h5 {
    padding-left: 15px;
}
</style>
