<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createMember'}" class="btn btn-success"><i class ="glyphicon glyphicon-plus"></i>新規登録</router-link>
        </div>
        <form action="" method="POST" role="form">
	          <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	    <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
		<input type="text" class="form-control" id="" v-model="keyword" placeholder="Type content...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </form>



        <div class="panel panel-default">
            <div class="panel-heading">MembersS list</div>
            <div class="panel-body">
               <div class="row">
	          <div class="col-sm-6">
                    <ul class="pagination">
                      <li :class="{disabled: current_page <= 1}"><a href="#" @click="change(1)">&laquo;</a></li>
	              <li :class="{disabled: current_page <= 1}"><a href="#" @click="change(current_page - 1)">&lt;</a></li>
		      <li v-for="page in pages" :key="page" :class="{active: page === current_page}">
                      <a href="#" @click="change(page)">{{page}}</a>
		      </li>
                      <li :class="{disabled: current_page >= last_page}"><a href="#" @click="change(current_page + 1)">&gt;</a></li>
		      <li :class="{disabled: current_page >= last_page}"><a href="#" @click="change(last_page)">&raquo;</a></li>
	          </ul>
                </div>
	        <div style="margin-top: 40px" class="col-sm-6 text-right">全 {{total}} 件中 {{from}} 〜 {{to}} 件表示</div></div>
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="100">&nbsp;</th>
                    </tr>
                    </thead>
		    <tbody>
                    <tr v-for="member, index in members">
                        <td>{{ member.name }}</td>
                        <td>{{ member.email }}</td>

                        <td>
                            <router-link :to="{name: 'editMember', params: {id: member.id}}" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></router-link>
                            <router-link :to="{name: 'editMember', params: {id: member.id}}" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil"></i>
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(member.id, index)"><i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                members: [],
		current_page: 1,
	        last_page: 1,
	        total: 1,
		from: 0,
		to: 0,
		keyword: ''
            }
        },
        mounted() {
	    this.load(1);
        },
	watch: {
           keyword: function (q) {
	   alert(q);
           }
        },
        methods: {
            load(page) {	
	        var app = this;
		axios.get('/api/v1/members?page=' + page)
		.then(function (resp) {
		    app.members = resp.data.data;
		    app.current_page = resp.data.current_page;
		    app.last_page = resp.data.last_page;
		    app.total = resp.data.total;
		    app.from = resp.data.from;
		    app.to = resp.data.to;
		})
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load members");
                });
	    },
            change(page) {
                if (page >= 1 && page <= this.last_page) this.load(page)
            },
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/members/' + id)
                        .then(function (resp) {
                            app.members.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete member");
                        });
                }
            }
        },
        computed: {
          pages() {
            let start = _.max([this.current_page - 2, 1])
            let end = _.min([start + 5, this.last_page + 1])
            start = _.max([end - 5, 1])
            return _.range(start, end)
          },
        }
    }
</script>
