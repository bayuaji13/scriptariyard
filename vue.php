<script src="https://unpkg.com/vue/dist/vue.js"></script>


<div id="app">
	{{title}}
  <ol>
  	<input v-model="search">
  	<button type="button" v-on:click="add">add</button>
  	{{search}}
    <li v-for="todo in searched(todos)">
      {{ todo.text }}
    </li>
  </ol>
</div>

<script type="text/javascript">
	var app = new Vue({
	  el: '#app',
	  data: {
	    title : 'hai',
	    search : 'a',
	    todos: [
	      { text: 'Learn JavaScript' },
	      { text: 'Learn Vue' },
	      { text: 'lorem' },
	      { text: 'impsum' },
	      { text: 'dolor' },
	      { text: 'sit amet' },
	    ]
	  },
	  methods : {
	  	searched : function () {
	  		var query = this.search.toLowerCase();
	  		return this.todos.filter(function (todo) {
	  			return todo.text.toLowerCase().indexOf(query) != -1;
	  		})
	  	},
	  	add : function () {
	  		this.todos.push(this.search)
	  		return true;
	  	}
	  }
	})

</script>