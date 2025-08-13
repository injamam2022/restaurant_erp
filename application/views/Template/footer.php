                <footer class="footer hidden-xs-down">
                    <p>© <?php echo $this->config->item('company_name');?> . All rights reserved.</p>

                    
                </footer>
            </section>
        </main>

<script>
    function change_status_item(food_id) {
  $.ajax({
    type: "POST",
    url: base_url + "Food/update_food_status",
    data: { food_id: food_id },
    dataType: "json",
    success: function (res) {
      res = JSON.parse(res);
      if (res.stat == 200) {
        swal({
          title: "Success",
          text: res.msg,
          type: "success",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-sm btn-light",
          background: "rgba(0, 0, 0, 0.96)",
        });
      }
    },
    error: function (msg) {
      console.log("error : " + JSON.stringify(msg));
    },
  });
}
</script>