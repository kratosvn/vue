<!DOCTYPE html>
<html>
<title>Vue JS</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div id="app">
    <counter v-bind:add-num="10"></counter>
</div>

<script>
    var counter = Vue.component('counter',{
        template: `
        <div>
        <div>Count: {{this.count}}</div>
        <button class="vue-btn" @click="increment">Increment by {{this.addNum}}</button>
        </div>
        `,
        props:{
            addNum:{
                type: Number,
                default:1
            }
        },
        data(){
            return{
                count: 0
            }
        },
        methods:{
            increment(){
                this.count += this.addNum
            }
        }
    });
    var app = new Vue({
        el:'#app',
        components:{
            counter
        },
        data:{

        }
    });
</script>
</body>
</html>