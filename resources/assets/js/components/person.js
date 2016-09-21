export default {
  data: function(){
    return {
      people: [],

      message: 'Hello World'
    }
  },

  created: function() {
    console.log('People Component');
    this.fetchPersonList();
  },

  methods: {
    fetchPersonList: function() {
      this.$http.get('../api/person').then((response) => {
        this.people = response.data.data;
      }, (response) => {
        // error callback
        console.log(response);
      });
    }
  }
}
