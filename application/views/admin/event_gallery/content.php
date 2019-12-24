
<!--tabledeki fieldleri gizletmek ucun olan style bunu external css in icinde yazma yoxsa diger seyfelerdeki tablelerde korlanar-->
<style>
    th:nth-child(2){
        display: none!important;
    }

    td:nth-child(2){
        display: none!important;
    }

    th:nth-child(3){
        display: none!important;
    }

    td:nth-child(3){
        display: none!important;
    }

    .c_row_update{
        display: none;
    }

    .dt-buttons{
        display: none;
    }

    .c_row_create{
        display: none;
    }

    #datatable_filter{
        display: none;
    }

</style>
<!--tabledeki fieldleri gizletmek ucun olan style bunu external css in icinde yazma yoxsa diger seyfelerdeki tablelerde korlanar-->


<section>


    <div class="card card-cascade narrower z-depth-0 pb-4">


        <form action   =   "<?php echo base_url("Panel_admin_page_events_gallery/add/$id")?>"
              data-url =   "<?php echo base_url("Panel_admin_page_events_gallery/add/$id")?>"
              class="dropzone c_dropzone"
              enctype="multipart/form-data"
              id="dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple style="visibility: hidden;"/>
            </div>

        </form>


        <div class="px-4">
            <!-- Tablenin ozu -->
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-hover table-bordered mb-0" id="datatable" data-url="<?php echo $get_data_link?>">

                    <!-- Table head -->
                    <thead>
                    <tr>

                        <th class="c_switch_th" data-orderable="false" style="width: 20px!important; padding: 5px!important;">

                            <!--<label for="checkbox" class="form-check-label mr-2 label-table c_label_thead"><input type="checkbox" class="c_check_all form-check-input"/><span id="c_span_whole"></span></label>-->
                            <a class="red lighten-1 btn btn-danger mr-1 c_delete_all" style="padding: 6px!important;"><i style="font-size: 13px;" class="fas fa-trash"></i></a>

                            <input class="form-check-input c_check_all" type="checkbox" id="checkbox">
                            <label for="checkbox" class="form-check-label mr-2 label-table c_label_thead c_switch_margin"></label>

                        </th>


                        <th data-orderable="true" class="c_th_max_width"><a>id<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>event_id<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Şəklin adı<i class="fas fa-sort ml-1"></i></a></th>


                        <th data-orderable="false" class="c_operations" style="width: 53px!important;"><a>Operations</a></th>


                    </tr>
                    </thead>
                    <!-- Table head -->


                    <!-- Table body data table melumatlari bura ajaxnan getirir-->
                    <tbody></tbody>
                    <!-- Table body data table melumatlari bura ajaxnan getirir-->

                </table>
                <!-- Table -->
            </div>
            <!-- Tablenin ozu -->
        </div>
    </div>





</section>












