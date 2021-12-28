const app = new Vue({
    el: '#app',
    data: {
        disks: null
    },
    mounted() {
        axios
            .get('./api/disks.php')
            .then(response => {
                console.log(response);
                this.disks = response.data;
            })
            .catch(error => {
                this.error = 'OPS' + error;
            })
    }
})