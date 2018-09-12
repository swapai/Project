var dashboardApp= new Vue({
  el : '#dashboard',
  data :{
    "name" : "Tapestry",
    "short_description": "Build a visualization layer for the project dashboard",
    "start_date" : "2018-07-01",
    "target_date" : "2018-11-03",
    "budget" : "4950000",
    "spent" : "3456700",
    "projected_spend": "4740500",
    "weekly_effort_target": 400,
    // Dummy task being left behind so the Vue doesn't throw an error while it is still fetching data
    tasks : [
      {
        id: '',
        "title": '',
        "type" : '',
        "size" : '',
        "team" : '',
        "status": '',
        "start_date": '',
        "close_date": '',
        "hours_worked":'',
        "perc_complete": '',
        "current_sprint" : ''
      }
    ]
  },  computed:{
    days_left : function(){
      return 31;
    }
  },

  methods:{
    pretty_date: function(d){
      return d;
    },
    log(msg){
      alert(msg);
    },
    completed_Class: function(task){
      if(task.perc_complete == 100){
        return 'alert-success';
      }
      if(task.current_sprint && task.perc_complete == 0){
        return 'alert-warning';
      }
    },
    // .catch() is doing .then() with just the error callback
        fetch_Tasks: function(){
          fetch('https://raw.githubusercontent.com/tag/iu-msis/dev/public/p1-tasks.json')
            .then(function(response){return response.json()})
            // Equivalent to the above line .then((response) => return response.json()
            .then(json => {dashboardApp.tasks = json})
            .catch(function(err){
              console.log('Fetch error');
              console.log(err);
            })
        },
        gotoTask :function(tId){
          window.location = 'task.html?taskId=' +tId;
        }

  },
  created(){
    this.fetch_Tasks();
  }
});
