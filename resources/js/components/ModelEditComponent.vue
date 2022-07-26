<template>
    <div class="col-8">
        <div class="card">
            <div class="p-fluid row">
                <div class="field col-12 md:col-4">
                    <h5 style="margin-top: 0px;">Name</h5>
                    <span class="p-float-label">
                        <InputText id="inputtext" type="text" />
                    </span>
                </div>

                <div class="field col-6">
                    <h5>Choose currency</h5>
                    <span class="p-float-label col-12" style="padding: 0px;">
                        <Dropdown id="dropdown" v-model="modelData.currency" :options="currencies" optionLabel="name" />
                    </span>
                </div>
                <div class="field col-6">
                    <h5>Amount of sites</h5>
                    <span class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber v-model="modelData.amount_of_sites" mode="decimal" />
                    </span>
                </div>

                <div class="field col-6">
                    <h5>Periodicity</h5>
                    <div class="col-12 radios" style="padding: 0px;">
                        <div class="field-radiobutton">
                            <RadioButton id="period" name="city" value="quarterly" v-model="modelData.periodicity" />
                            <label for="period">Quarterly</label>
                        </div>
                        <div class="field-radiobutton">
                            <RadioButton id="period2" name="city" value="semi-annual" v-model="modelData.periodicity" />
                            <label for="period2">Semi-annual</label>
                        </div>
                        <div class="field-radiobutton">
                            <RadioButton id="period3" name="city" value="annual" v-model="modelData.periodicity" />
                            <label for="period3">Annual</label>
                        </div>
                    </div>
                </div>
                <div class="field col-6">
                    <h5>Period end</h5>
                    <div class="col-12 radios" style="padding: 0px;">
                        <div class="field-radiobutton">
                            <RadioButton id="period_end1" name="city" value="march" v-model="modelData.period_end" />
                            <label for="period_end1">March</label>
                        </div>
                        <div class="field-radiobutton">
                            <RadioButton id="period_end2" name="city" value="june" v-model="modelData.period_end" />
                            <label for="period_end2">June</label>
                        </div>
                        <div class="field-radiobutton">
                            <RadioButton id="period_end3" name="city" value="september"
                                v-model="modelData.period_end" />
                            <label for="period_end3">September</label>
                        </div>
                        <div class="field-radiobutton">
                            <RadioButton id="period_end4" name="city" value="december" v-model="modelData.period_end" />
                            <label for="period_end4">December</label>
                        </div>
                    </div>
                </div>

                <div class="field col-6">
                    <h5>Units</h5>
                    <span class="p-float-label">
                        <InputText id="inputunit" type="text" v-model="modelData.units" />
                    </span>
                </div>
                <div class="field col-6">
                    <h5>Amount of sites</h5>
                    <span class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber mode="decimal" v-model="modelData.amount_of_sites_units" />
                    </span>
                </div>
                <div class="field col-12">
                    <h5>MW</h5>
                    <span class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber mode="decimal" v-model="modelData.mw" />
                    </span>
                </div>

                <h5 class="col-12" style="padding: 0px;">Power prices (short term)</h5>

                <div class="p-float-label col-6" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" mode="decimal" v-model="modelData.power_price"
                        :minFractionDigits="2" placeholder="Short term price" />
                </div>
                <div class="field col-6">
                    <Calendar id="basic" v-model="modelData.short_term_date" autocomplete="off"
                        placeholder="Short term end date" />
                </div>

                <h5 class="col-12" style="padding: 0px;">Power prices (long term) </h5>

                <div class="p-float-label col-4" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" mode="decimal" v-model="modelData.test"
                        :minFractionDigits="2" placeholder="Short term price" />
                </div>
                <div class="p-float-label col-4" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation" :minFractionDigits="2"
                        suffix="%" mode="decimal" placeholder="Inflation" />
                </div>
                <div class="field col-4">
                    <Calendar id="basic" v-model="modelData.long_term_date" autocomplete="off"
                        placeholder="Long term end date" />
                </div>

                <h5 class="col-12" style="padding: 0px;">Capex + devex</h5>

                <div class="p-float-label col-6" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" mode="decimal"
                        v-model="modelData.capex_devex_money_cost" :minFractionDigits="2" placeholder="Money cost" />
                </div>
                <div class="field col-6">
                    <Calendar id="basic" v-model="modelData.capex_devex_date" autocomplete="off" view="month"
                        dateFormat="mm/yy" placeholder="Date" />
                </div>

                <h5 class="col-12" style="padding: 0px;">Dates</h5>

                <div class="field col-4">
                    <Calendar id="basic" v-model="modelData.construction_date" autocomplete="off" view="month"
                        dateFormat="mm/yy" placeholder="Construction" />
                </div>
                <div class="field col-4">
                    <Calendar id="basic" v-model="modelData.operation_date" autocomplete="off" view="month"
                        dateFormat="mm/yy" placeholder="Operations" />
                </div>
                <div class="field col-4">
                    <Calendar id="basic" v-model="modelData.end_date" autocomplete="off" view="month" dateFormat="mm/yy"
                        placeholder="End" />
                </div>

                <h5 class="col-12" style="padding: 0px;">Amount of Opex items</h5>
                <div class="p-float-label col-12" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" mode="decimal" v-model="modelData.opex_amount" />
                </div>

                <h5 class="col-12" style="padding: 0px;">Opex</h5>

                <span class="p-float-label col-6" style="padding: 0px">
                    <InputText id="inputtext" type="text" placeholder="Name" v-model="modelData.opex_name" />
                </span>
                <div class="p-float-label col-6" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" mode="decimal" v-model="modelData.number_per_mw"
                        :minFractionDigits="2" placeholder="Number per MW" />
                </div>
                <div class="field col-6">
                    <Calendar id="basic" v-model="modelData.opex_start_date" autocomplete="off" view="month"
                        dateFormat="mm/yy" placeholder="Start date" />
                </div>
                <div class="field col-6">
                    <Calendar id="basic" v-model="modelData.opex_end_date" autocomplete="off" view="month"
                        dateFormat="mm/yy" placeholder="End date" />
                </div>

                <h5 class="col-12" style="padding: 0px;">Inverter replacement</h5>

                <div class="p-float-label col-6" style="padding: 0px;">
                    <InputNumber id="input_info" locale="en-US" mode="decimal"
                        v-model="modelData.inverter_replacement_number" :minFractionDigits="2"
                        placeholder="Number per MW" />
                </div>
                <div class="field col-6">
                    <Calendar id="basic" v-model="modelData.inverter_replacement_date" autocomplete="off" view="month"
                        dateFormat="mm/yy" placeholder="Date" />
                </div>
                <div class="col-4" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Degradation factor</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.degradation_number"
                            :minFractionDigits="2" suffix="%" mode="decimal" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Availability</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.availability_number"
                            :minFractionDigits="2" suffix="%" mode="decimal" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Irradiation</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.irradiation_number"
                            :minFractionDigits="2" suffix="%" mode="decimal" />
                    </div>
                </div>
                <div class="col-6" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Performance ratio</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.perfomance_ratio"
                            :minFractionDigits="2" suffix="%" mode="decimal" />
                    </div>
                </div>
                <div class="col-6" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Line loss</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.line_loss" :minFractionDigits="2"
                            suffix="%" mode="decimal" />
                    </div>
                </div>

                <h5 class="col-12" style="padding: 0px;">Degradation factor</h5>

                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_january"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="january" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_february"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="february" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_march"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="march" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_april"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="april" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_may"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="may" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_june"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="june" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_july"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="july" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_august"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="august" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_september"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="september" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_october"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="october" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_november"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="november" />
                    </div>
                </div>
                <div class="col-4" style="padding: 0px">
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_december"
                            :minFractionDigits="2" suffix="%" mode="decimal" placeholder="december" />
                    </div>
                </div>

                <div class="col-6" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Tax rate</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.tax_rate" :minFractionDigits="2"
                            suffix="%" mode="decimal" />
                    </div>
                </div>
                <div class="col-6" style="padding: 0px">
                    <h5 class="col-12" style="padding: 0px;">Cost inflation</h5>
                    <div class="p-float-label col-12" style="padding: 0px;">
                        <InputNumber id="input_info" locale="en-US" v-model="modelData.inflation_cost"
                            :minFractionDigits="2" suffix="%" mode="decimal" />
                    </div>
                </div>

                <Button style="margin-top: 10px;" label="Save" @click="sendModelData()" class="p-button-primary" />
            </div>
        </div>
    </div>
</template>

<script>

import InputText from 'primevue/inputtext';
import InputNumber from 'primevue/inputnumber';
import RadioButton from 'primevue/radiobutton';
import Calendar from 'primevue/calendar';
import Button from 'primevue/button'

import Dropdown from 'primevue/dropdown';

export default {
    components: {
        InputText,
        InputNumber,
        Dropdown,
        RadioButton,
        Calendar,
        Button
    },
    props: {
        isNewModel: {
            Boolean,
            default: false
        },
        modelId: {
            Number,
            default: 0
        }
    },
    data() {
        return {
            currencies: [
                { name: '£', code: 'GBP' },
                { name: '€', code: 'EUR' },
                { name: '$', code: 'USD' },
            ],
            modelData: {
                currency: null,
                value1: 1,
                periodicity: '',
                period_end: null,
                amount_of_sites_units: null,
                mw: null,
                units: null,
                short_term_date: null,
                long_term_date: null,
                capex_devex_date: null,
                construction_date: null,
                operation_date: null,
                end_date: null,
                opex_name: null,
                opex_start_date: null,
                opex_end_date: null,
                inverter_replacement_date: null,
                test: null,
                inflation: null,
                power_price: null,
                test3: null,
                opex_amount: null,
                number_per_mw: null,
                inverter_replacement_number: null,
                degradation_number: null,
                availability_number: null,
                irradiation_number: null,
                perfomance_ratio: null,
                line_loss: null,
                inflation_january: null,
                inflation_february: null,
                inflation_march: null,
                inflation_april: null,
                inflation_may: null,
                inflation_june: null,
                inflation_july: null,
                inflation_august: null,
                inflation_september: null,
                inflation_october: null,
                inflation_november: null,
                inflation_december: null,
                tax_rate: null,
                inflation_cost: null,
            }

        }
    },
    mounted() {
        console.log('Component mounted.');
        this.getModelData();
    },
    methods: {
        getModelData() {
            axios.get('/get-model-data/' + this.modelId) // returns a promise
                .then(response => {
                    this.modelData = response.data.model_data;
                })
        },
        sendModelData() {
            if (this.isNewModel) {
                axios.post('/add-new-model', {
                    modelData: this.modelData,
                    id: this.modelId
                })
                    .then(function (response) {
                        console.log(response);
                    })
            } else {
                axios.post('/edit-model-data', {
                    modelData: this.modelData,
                })
                    .then(function (response) {
                        console.log(response);
                    })
            }
        }
    }
}
</script>

<style scoped>
h5 {
    margin-top: 20px;
    margin-bottom: 15px;
}

.card {
    margin-top: 20px;
}

.radios label {
    margin-bottom: 0px;
}

.card {
    padding: 25px;
}

.field {
    padding: 0px;
}
</style>
