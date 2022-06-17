@extends('../../Layout/MasterLayout')
@Section('showusers')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Displaying Product List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">User ID </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Gender </th>
                            <th class="column-title">Profession </th>
                            <th class="column-title">Email </th>
                            <!-- <th class="column-title">User Type </th> -->
                            <th class="column-title">Status</th>
                            <th class="column-title">Created at</th>
                            <th class="column-title">Approval</th>
                            <th class="column-title">Rejection</th>
                          </tr>
                        </thead>

                        <tbody>
                            @if($data)
                            @foreach($data as $value)
                          <tr class="even pointer">
                            
                            <td class=" ">{{$value->ID}}</td>
                            <td class=" ">{{$value->FullName}}</td>
                            <td class=" ">{{$value->Gender}} </td>
                            <td class=" ">{{$value->Profession}}</td>
                            
                            <td class="a-right a-right ">{{$value->Email}}</td>
                            <!-- <td class="a-right a-right ">{{$value->UserType}}</td> -->
                            <td class="a-right a-right">{{$value->Status}} </td>
                            <td class="a-right a-right">{{$value->created_at}}</td>
                            <td><a href="{{"approve/".$value['ID']}}"><i class="glyphicon glyphicon-ok"></i></a> </td>
                            <td><a href="{{"reject/".$value['ID']}}"><i class="glyphicon glyphicon-remove"></i></a> </td> 
                          </tr>
                         
                         @endforeach
                         @else
                         <tr>
                            <td>No User Found</td>
                         </tr>
                         @endif
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
@stop