Nova.booting((Vue, router) => {
    Vue.component('index-html', require('./components/IndexField'));
    Vue.component('detail-html', require('./components/DetailField'));
    Vue.component('form-html', require('./components/FormField'));
})
