$(document).ready(function() {
    $('.js-data-example-ajax').select2({
        ajax: {
          url: "/ci_blog/admin/specialposts/search",
          dataType: 'json',
          // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
          data: function (params) {
            var query = {
              search: params.term
            }
                  // Query parameters will be ?search=[term]&type=public
                  //console.log(query);
            return query;
          },
          processResults: function (data) {
            // Tranforms the top-level key of the response object from 'items' to 'results'
            return {
                results: data.items
            };
            // var data = $.map(data, function (obj) {
            //   obj.id = obj.id;
            //   obj.text = obj.article_post_title; // replace pk with your identifier
            //   return obj;
            // });

          } 

        }
      });
});