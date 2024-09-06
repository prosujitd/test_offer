<template>

    <Link href="/offer">Offer </Link>
    <Link href="/offer2">Offer 2</Link>
   <p>Offer 2</p>
    <div>
        <div class="container">
            <div class="row">
                <div class="span5">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Expired At</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(offer, index) in new_offer">
                                <td>{{ offer.name }}</td>
                                <td>{{ offer.expired_at }}</td>
                                <td ref="myref" class="time-status" data-time="{{ offer.expired_at }}" data-expire="false"><span class="label label-success"> {{ offer.diff }} -- </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref, watch } from 'vue';
import moment from 'moment';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    offers: Object,
})

const expiredtime = ref('');
const remaining_time = ref([]);
const new_offer = ref([]);
       

onMounted( () => {
    new_offer.value = props.offers;
    console.log(new_offer)
    setInterval(greet,1000);
    // greet();
})

// let currentDateTime
const greet = (()=>{


    console.log(new_offer.value)

    let currentDateTime = moment().format('YYYY-MM-DD HH:mm:ss')
    new_offer.value.forEach((item,index) => {
        // this.expiredtime = value.
       
        let deadlineDateTime = moment(item.expired_at, 'YYYY-MM-DD HH:mm:ss');
        deadlineDateTime.diff(currentDateTime, 'seconds');

        console.log(item);
        item.diff = deadlineDateTime.diff(currentDateTime, 'seconds');
        item.is_exp = false;
        
        // console.log('end date >> ',expired_at);
        //   deadlineDateTime = moment(deadlineDateTime, 'YYYY-MM-DD HH:mm')
        // console.log('deadline date time >> ',deadlineDateTime);
        // currentDateTime = moment().format('YYYY-MM-DD HH:mm:ss')
        // console.log('current date time >> ', currentDateTime);
        // remaining_time.value[index] = deadlineDateTime.diff(currentDateTime, 'seconds');
    })

    console.log(new_offer.value)
})

// const diff = (expired_at,index) => {
//     let deadlineDateTime = moment(expired_at, 'YYYY-MM-DD HH:mm:ss')
//     console.log('end date >> ',expired_at);
//     //   deadlineDateTime = moment(deadlineDateTime, 'YYYY-MM-DD HH:mm')
//     // console.log('deadline date time >> ',deadlineDateTime);
//     let currentDateTime = moment().format('YYYY-MM-DD HH:mm:ss')
//     // console.log('current date time >> ', currentDateTime);
//     return diff = deadlineDateTime.diff(currentDateTime, 'seconds');
//     // console.log('diff >> ', diff)
// }

</script>
