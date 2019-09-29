<template>
    <div class="zhu">
        <div class="login-box">
            <div class="login-box-main">
                <div class="main-title">
                    <p>用户注册</p>
                    <p>区管理员注册</p>
                </div>
                <div class="main-input">
                    <table>
                        <tr>
                            <td><i class="el-icon-user-solid"></i></td>
                            <td><input type="text" v-model="username" ></td>
                        </tr>
                        <tr>
                            <td><i class="el-icon-lock"></i></td>
                            <td><input type="password" v-model="pwd" autoComplete="new-password"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button @click="reg()">注册</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="main-bottom">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            username:"",
            pwd:""
        }
    },
    methods:{
        reg(){
            let username = this.username
            let pwd = this.pwd
            let url = "http://localhost:8888/backstage-system/api/test.php?username="+username+"&pwd="+pwd
            if(username.length>18 || username.length<6){
                //报错
                alert("用户名不可大于18或者小于6")
            }else{
                this.$axios.get(url).then((res)=>{
                    if(res.data.msg=='ok'){
                        localStorage["uToken"]=res.data.token
                        //弹出注册成功提示 进入 登录页面
                        alert("注册成功")
                        this.$router.push("/")
                    }
                })
            }
        }
    }
}
</script>

<style scoped>
    .zhu{
        width: 100%;
        height: 750px;
        background: url(/1111.jpg);
        background-size: 100% 100%; 
        margin: 0 auto;
    }
    .login-box{
        width: 322px;
        height: 274px;
        background: rgba(255,255,255,0.5);
        position: fixed;
        right: 250px;
        top: 200px;
        border-radius: 15px;
    }
    .login-box-main{
        position: fixed;
        width: 285px;height: 350px;
        background: white;
        right: 268px;
        top: 160px;
        border-radius: 15px;
    }
    .main-title{
        width: 100%;
        height: 63px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .main-title p{
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px 0;
        cursor: pointer;
    }
    .main-title p:nth-child(1){
        color: #2263c1;
        border-bottom: 2px solid #2263c1;
    }
    .main-input{
        width: 100%;
        height: 140px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 38px;
    }
    .main-input table tr{
        height: 45px;
    }
    .main-input table tr td:nth-child(1){
        width: 32px;
    }
    .main-input table tr td:nth-child(2){
        width: 200px;
    }
    .main-input table tr td i{
        color: #0f80c6;
        font-size: 22px;
    }
    .main-input table tr td input{
        width: 100%;
        border: none;
        border-bottom: 2px solid #a3caff;
        outline: none;
        background: white;
        text-align: center;
    }
    .main-input table tr td button{
        width: 100%;
        height: 34px;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 5px;
        color: white;
        background: #2d89f0;
    }
    .main-input table tr:nth-child(3){
        height: 80px;
    }
    .main-bottom{
        width: 100%;
        position: relative;
        box-sizing: border-box;
        padding: 20px;
    }
    .main-bottom span{
        position: absolute;
        font-size: 12px;
        color: #2d89f0;
        cursor: pointer;
    }
    .main-bottom span:nth-child(1){
        left: 20px;
    }
    .main-bottom span:nth-child(2){
        right: 20px;
    }
</style>