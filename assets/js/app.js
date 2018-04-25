// import Vue from 'vue';
//
// Vue.component('modal', {
//     template: `
//     <div class="modal is-active">
//         <div class="modal-background"></div>
//         <div class="modal-content">
//             <div class="box">
//                 <p>InfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfo
//                     InfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfoInfo</p>
//             </div>
//         </div>
//         <button class="modal-close is-large" aria-label="close"></button>
//     </div>
//     `
// })
//
// // start app
// new Vue({
//     el: '#app',
//     data: {
//         showModal: false
//     }
// })
import Vue from 'vue';
import Example from './components/Example'

/**
 * Create a fresh Vue Application instance
 */
new Vue({
    el: '#app',
    components: {Example}
});