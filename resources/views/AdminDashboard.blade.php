@extends('../..Layout/MasterLayout')
@Section('Main')
<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">{{$udata}}</div>
            
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Pending User Requests</span>
              <div class="count">{{$puser}}</div>
            
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Products</span>
              <div class="count green">{{$tproduct}}</div>
            
            </div>
            <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Vendors</span>
              <div class="count">0</div>
            
            </div> -->
           
           
          </div>
          <!-- /top tiles -->

         

            


          </div>


         


           
          </div>
        </div>
        @stop