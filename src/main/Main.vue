<template>
  <div class="main">
    <div class="main-top">
      <p>后台管理系统</p>
      <div class="main-top-right">
        <input type="text" placeholder="输入关键字" />
        <i class="el-icon-search"></i>
        <span class="head-img">
          <img src="/1.jpg" alt />
        </span>
        <span class="username">武丽婕</span>
        <span class="query">中国</span>
        <i class="el-icon-arrow-down"></i>
      </div>
    </div>
    <div class="main-center">
      <el-row class="tac">
        <el-col :span="24">
          <el-menu
            default-active="2"
            class="el-menu-vertical-demo"
            @open="handleOpen"
            @close="handleClose"
          >
            <el-submenu index="1">
              <template slot="title">
                <i class="el-icon-arrow-right"></i>
                <span>导航一</span>
              </template>
              <el-menu-item-group>
                <template slot="title">分组一</template>
                <el-menu-item index="1-1">选项1</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
              </el-menu-item-group>
              <el-menu-item-group title="分组2">
                <el-menu-item index="1-3">选项3</el-menu-item>
              </el-menu-item-group>
              <el-submenu index="1-4">
                <template slot="title">选项4</template>
                <el-menu-item index="1-4-1">选项1</el-menu-item>
              </el-submenu>
            </el-submenu>
            <template>
                <el-submenu index="2">
              <template slot="title">
                <i class="el-icon-arrow-right"></i>
                <span>导航二</span>
              </template>
              <el-menu-item-group>
                <template slot="title">分组一</template>
                <el-menu-item index="1-1">选项1</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
              </el-menu-item-group>
              <el-menu-item-group title="分组2">
                <el-menu-item index="1-3">选项3</el-menu-item>
              </el-menu-item-group>
              <el-submenu index="1-4">
                <template slot="title">选项4</template>
                <el-menu-item index="1-4-1">选项1</el-menu-item>
              </el-submenu>
            </el-submenu>
                
            </template>
              
            <template>
                <el-submenu index="3">
              <template slot="title">
                <i class="el-icon-arrow-right"></i>
                <span>导航三</span>
              </template>
              <el-menu-item-group>
                <template slot="title">分组一</template>
                <el-menu-item index="1-1">选项1</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
              </el-menu-item-group>
              <el-menu-item-group title="分组2">
                <el-menu-item index="1-3">选项3</el-menu-item>
              </el-menu-item-group>
              <el-submenu index="1-4">
                <template slot="title">选项4</template>
                <el-menu-item index="1-4-1">选项1</el-menu-item>
              </el-submenu>
            </el-submenu>
                
            </template>
          </el-menu>
        </el-col>
      </el-row>
    </div>
    <div class="main-foot">
        <div class="main-foot-title">
            <el-button type="success" size="small" style="background:#47c1d0;"><i class="el-icon-close"></i>删除</el-button>
            <el-button type="success" size="small" style="background:#47c1d0;"><i class="el-icon-plus"></i>新增</el-button>
            <el-button type="success" size="small" style="background:#47c1d0;"><i class="el-icon-right"></i>导出</el-button>
        </div>
        <table>
            <tr>
                <th><input type="checkbox">id</th>
                <th>域名</th>
                <th>备案状态</th>
                <th>域名注册商</th>
            </tr>
            <tr>
                <td><input type="checkbox">1</td>
                <td>www.baidu.com</td>
                <td>京ICP备07020624号-2</td>
                <td>HICHINA ZHICHENG TECHNOLOGY</td>
            </tr>
        </table>
    </div>
  </div>
</template>

<script>
export default {
    methods:{
        handleOpen(key, keyPath) {
            
        },
        handleClose(key, keyPath) {
            
        }
    }
};
</script>

<style scoped>
.main {
  width: 100%;
  margin: 0 auto;
}
.main-top {
  width: 100%;
  height: 52px;
  background: #2762d6;
  float: left;
}
.main-top p {
  float: left;
  color: white;
  font-weight: bold;
  font-size: 23px;
  padding: 10px 15px;
}
.main-top-right {
  width: 430px;
  float: right;
  position: relative;
}
.main-top-right input {
  float: left;
  width: 240px;
  height: 36px;
  background: rgba(255, 255, 255, 0.4);
  outline: none;
  border: none;
  border-radius: 50px;
  margin: 6px 0;
  text-indent: 15px;
  color: white;
}
.el-icon-search {
  position: absolute;
  top: 15px;
  left: 210px;
  font-size: 20px;
  color: white;
  font-weight: bold;
}
.head-img {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  float: left;
  background: white;
  margin: 6px 0px 6px 15px;
}
.head-img img {
  width: 100%;
  height: 100%;
  border-radius: 100%;
}
.username {
  float: left;
  padding: 10px;
  color: white;
  font-weight: bold;
}
.query {
  position: absolute;
  top: 32px;
  right: 100px;
  color: white;
  font-size: 12px;
  font-family: "楷体";
}
.el-icon-arrow-down {
  float: left;
  color: white;
  font-size: 25px;
  font-weight: bold;
  padding: 15px;
  cursor: pointer;
}

.main-center {
  float: left;
  width: 15%;
  height: 685px;
  background: #edf2f5;
}


.main-foot {
  float: left;
  width: 85%;
  height: 685px;
  background: white;
}
.main-foot-title{
    width: 100%;
    height: 45px;
    float: left;
    padding: 10px;
}
.main-foot table{
    width: 100%;
}
.main-foot table tr th{
    background: #edeef2;
    height: 30px;
}
.main-foot table tr td{
    text-align: center;
    height: 30px;
    font-size: 14px;
}
.main-foot table tr td:nth-child(2){
    color: rgba(143,212,212);
}
</style>