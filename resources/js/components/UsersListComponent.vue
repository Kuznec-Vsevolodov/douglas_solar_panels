<template>
    <div class="container">
        <div class="row col-12">
            <DataTable :value="users" :resizableColumns="true" columnResizeMode="expand">
                <template #header>
                    <h2>Users</h2>
                </template>
                <Column field="name" header="Name" :sortable="true"></Column>
                <Column field="phone" header="Phone" :sortable="true"></Column>
                <Column field="sign_up_date" header="Sign Up Date" :sortable="true"></Column>
                <Column field="last_log_in" header="Last log in" :sortable="true"></Column>
                <Column field="amount_of_models" header="Amount of Models" :sortable="true"></Column>

                <Column headerStyle="width: 8em" bodyStyle="text-align: center">
                    <template #body="slotProps">
                        <Button type="button" icon="pi pi-times" class="p-button-danger"></Button>
                    </template>
                </Column>

                <Column headerStyle="width: 8em" bodyStyle="text-align: center">
                    <template #body="slotProps">
                        <Button type="button" icon="pi pi-cog"></Button>
                    </template>
                </Column>

                <template #footer>
                    In total there are {{ users ? users.length : 0 }} users.
                </template>
            </DataTable>
        </div>
    </div>
</template>

<script>

import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Row from 'primevue/row';
import Button from 'primevue/button'

export default {
    components: {
        DataTable,
        Column,
        Row,
        Button
    },
    data() {
        return {
            users: []
        }
    },
    mounted() {
        console.log('Component mounted.');
        this.getUserData();
    },
    methods: {
        getUserData() {
            axios.get('/get-users/') // returns a promise
                .then(response => {
                    this.users = response.data.users;
                })
        }
    }
}
</script>
