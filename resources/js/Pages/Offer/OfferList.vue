<template>
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
                                <td ref="myref" class="time-status" data-time="{{ offer.expired_at }}"
                                    data-expire="false"><span class="label label-success"> {{ remaining_time
                                        }} -- </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted, ref, watch } from 'vue';
import moment from 'moment';
export default {
    setup() {
        // Define reactive state using ref
        const expiredtime = ref('');
        const remaining_time = ref('');
        const new_offer = ref([]);
        const hour = ref('');
        const minute = ref('');
        const sec = ref('');

        // Return the state to be used in the template
        // return {
        //     expiredtime,
        //     remaining_time,
        //     new_offer,
        //     hour,
        //     minute,
        //     sec,
        // };
        const greet = (()=>{

            let currentDateTime = moment().format('YYYY-MM-DD HH:mm:ss')
            new_offer.forEach((value,index) => {
                // this.expiredtime = value.
                console.log(value);
            })
        
            
        });
        onMounted( () => {
                greet();
        })
    }
   
}
// import { useForm } from '@inertiajs/vue3';

// const props = defineProps({
//     'offers': Object,
// })

// const timeObject = {
//     expiredtime:ref(),
//     remaining_time = ref('');
//     new_offer = ref([]);
//     hour = ref('');
//     minute = ref('');
//     sec = ref('');
// }



// // consts timer = {
// //     hour: ,

// // }

// // const form = useForm({
// //     ''
// // })

// let status = ref([]);

// const diff = (expired_at, index) => {
//     let deadlineDateTime = moment(expired_at, 'YYYY-MM-DD HH:mm:ss')
//     console.log('end date >> ',expired_at);
//     //   deadlineDateTime = moment(deadlineDateTime, 'YYYY-MM-DD HH:mm')
//     // console.log('deadline date time >> ',deadlineDateTime);
//     let currentDateTime = moment().format('YYYY-MM-DD HH:mm:ss')
//     // console.log('current date time >> ', currentDateTime);
//     let diff = deadlineDateTime.diff(currentDateTime, 'seconds');
//     // console.log('diff >> ', diff)
//     status[index] = diff;

//     // if (diff > 0) {
//     //     // deadlineFlag.value = false;
//     //     // mySetInterval(diff);

//     //     // setInterval(diff,1000)
//     //     status.value = diff;
//     //     // return diff;
//     // } else {
//     //     // deadlineFlag.value = true;
//     //     // mySetInterval(diff);
//     //     status.value = diff;

//     //     // return diff;
//     // }
//     setTimeout(diff,5000);
//     return diff;
// }

// const greet = (()=>{

//     let currentDateTime = moment().format('YYYY-MM-DD HH:mm:ss')
//     this.new_offer.forEach((value,index) => {
//         // this.expiredtime = value.
//         console.log(value);
//     })
   
    
// })

// onMounted(()=>{

//         console.log(props.offers);


//     setInterval(greet, 1000);

//     this.new_offer = props.offers;
//     console.log(this.new_offer);

// })

</script>
