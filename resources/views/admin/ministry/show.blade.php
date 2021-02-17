@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="btn-group mb-5 float-right">
            <button type="button" class="waves-effect waves-light btn btn-info dropdown-toggle" data-toggle="dropdown">ACTION</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('admin.ministry.index') }}">BACK</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin.ministry.edit', $ministry->id) }}">EDIT</a>
            </div>
          </div>

          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">General Form Elements</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Forms</li>
                              <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>	  

      <section class="content">
        <div class="row">	
            <div class="col-sm-9 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border text-center">
                    <h3 class="box-title text-white text-uppercase text-center m-5"><strong>{{ $ministry->id }}. {{ $ministry->name }} department</strong></h3>
                    <br> <br>
                    <p class="h5 text-uppercase lead">Current Leader: 
                        @if ($ministry->current_leader == NULL)
                            <span class="badge badge-danger text-uppercase">not assigned</span>
                        @else
                            {{ $ministry->currentLeader->fullname }}
                        @endif
                    </p>
				  </div>
				  <div class="box-body">
                    <p class="h4 text-uppercase">Members in the Ministry</p>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Position</th>
                                  <th>Office</th>
                                  <th>Age</th>
                                  <th>Start date</th>
                                  <th>Salary</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Tiger Nixon</td>
                                  <td>System Architect</td>
                                  <td>Edinburgh</td>
                                  <td>61</td>
                                  <td>2011/04/25</td>
                                  <td>$320,800</td>
                              </tr>
                              <tr>
                                  <td>Garrett Winters</td>
                                  <td>Accountant</td>
                                  <td>Tokyo</td>
                                  <td>63</td>
                                  <td>2011/07/25</td>
                                  <td>$170,750</td>
                              </tr>
                              <tr>
                                  <td>Ashton Cox</td>
                                  <td>Junior Technical Author</td>
                                  <td>San Francisco</td>
                                  <td>66</td>
                                  <td>2009/01/12</td>
                                  <td>$86,000</td>
                              </tr>
                              <tr>
                                  <td>Cedric Kelly</td>
                                  <td>Senior Javascript Developer</td>
                                  <td>Edinburgh</td>
                                  <td>22</td>
                                  <td>2012/03/29</td>
                                  <td>$433,060</td>
                              </tr>
                              <tr>
                                  <td>Airi Satou</td>
                                  <td>Accountant</td>
                                  <td>Tokyo</td>
                                  <td>33</td>
                                  <td>2008/11/28</td>
                                  <td>$162,700</td>
                              </tr>
                              <tr>
                                  <td>Brielle Williamson</td>
                                  <td>Integration Specialist</td>
                                  <td>New York</td>
                                  <td>61</td>
                                  <td>2012/12/02</td>
                                  <td>$372,000</td>
                              </tr>
                              <tr>
                                  <td>Herrod Chandler</td>
                                  <td>Sales Assistant</td>
                                  <td>San Francisco</td>
                                  <td>59</td>
                                  <td>2012/08/06</td>
                                  <td>$137,500</td>
                              </tr>
                              <tr>
                                  <td>Rhona Davidson</td>
                                  <td>Integration Specialist</td>
                                  <td>Tokyo</td>
                                  <td>55</td>
                                  <td>2010/10/14</td>
                                  <td>$327,900</td>
                              </tr>
                              <tr>
                                  <td>Colleen Hurst</td>
                                  <td>Javascript Developer</td>
                                  <td>San Francisco</td>
                                  <td>39</td>
                                  <td>2009/09/15</td>
                                  <td>$205,500</td>
                              </tr>
                              <tr>
                                  <td>Sonya Frost</td>
                                  <td>Software Engineer</td>
                                  <td>Edinburgh</td>
                                  <td>23</td>
                                  <td>2008/12/13</td>
                                  <td>$103,600</td>
                              </tr>
                              <tr>
                                  <td>Jena Gaines</td>
                                  <td>Office Manager</td>
                                  <td>London</td>
                                  <td>30</td>
                                  <td>2008/12/19</td>
                                  <td>$90,560</td>
                              </tr>
                              <tr>
                                  <td>Quinn Flynn</td>
                                  <td>Support Lead</td>
                                  <td>Edinburgh</td>
                                  <td>22</td>
                                  <td>2013/03/03</td>
                                  <td>$342,000</td>
                              </tr>
                              <tr>
                                  <td>Charde Marshall</td>
                                  <td>Regional Director</td>
                                  <td>San Francisco</td>
                                  <td>36</td>
                                  <td>2008/10/16</td>
                                  <td>$470,600</td>
                              </tr>
                              <tr>
                                  <td>Haley Kennedy</td>
                                  <td>Senior Marketing Designer</td>
                                  <td>London</td>
                                  <td>43</td>
                                  <td>2012/12/18</td>
                                  <td>$313,500</td>
                              </tr>
                              <tr>
                                  <td>Tatyana Fitzpatrick</td>
                                  <td>Regional Director</td>
                                  <td>London</td>
                                  <td>19</td>
                                  <td>2010/03/17</td>
                                  <td>$385,750</td>
                              </tr>
                              <tr>
                                  <td>Michael Silva</td>
                                  <td>Marketing Designer</td>
                                  <td>London</td>
                                  <td>66</td>
                                  <td>2012/11/27</td>
                                  <td>$198,500</td>
                              </tr>
                              <tr>
                                  <td>Paul Byrd</td>
                                  <td>Chief Financial Officer (CFO)</td>
                                  <td>New York</td>
                                  <td>64</td>
                                  <td>2010/06/09</td>
                                  <td>$725,000</td>
                              </tr>
                              <tr>
                                  <td>Gloria Little</td>
                                  <td>Systems Administrator</td>
                                  <td>New York</td>
                                  <td>59</td>
                                  <td>2009/04/10</td>
                                  <td>$237,500</td>
                              </tr>
                              <tr>
                                  <td>Bradley Greer</td>
                                  <td>Software Engineer</td>
                                  <td>London</td>
                                  <td>41</td>
                                  <td>2012/10/13</td>
                                  <td>$132,000</td>
                              </tr>
                              <tr>
                                  <td>Dai Rios</td>
                                  <td>Personnel Lead</td>
                                  <td>Edinburgh</td>
                                  <td>35</td>
                                  <td>2012/09/26</td>
                                  <td>$217,500</td>
                              </tr>
                              <tr>
                                  <td>Jenette Caldwell</td>
                                  <td>Development Lead</td>
                                  <td>New York</td>
                                  <td>30</td>
                                  <td>2011/09/03</td>
                                  <td>$345,000</td>
                              </tr>
                              <tr>
                                  <td>Yuri Berry</td>
                                  <td>Chief Marketing Officer (CMO)</td>
                                  <td>New York</td>
                                  <td>40</td>
                                  <td>2009/06/25</td>
                                  <td>$675,000</td>
                              </tr>
                              <tr>
                                  <td>Caesar Vance</td>
                                  <td>Pre-Sales Support</td>
                                  <td>New York</td>
                                  <td>21</td>
                                  <td>2011/12/12</td>
                                  <td>$106,450</td>
                              </tr>
                              <tr>
                                  <td>Doris Wilder</td>
                                  <td>Sales Assistant</td>
                                  <td>Sidney</td>
                                  <td>23</td>
                                  <td>2010/09/20</td>
                                  <td>$85,600</td>
                              </tr>
                              <tr>
                                  <td>Angelica Ramos</td>
                                  <td>Chief Executive Officer (CEO)</td>
                                  <td>London</td>
                                  <td>47</td>
                                  <td>2009/10/09</td>
                                  <td>$1,200,000</td>
                              </tr>
                              <tr>
                                  <td>Gavin Joyce</td>
                                  <td>Developer</td>
                                  <td>Edinburgh</td>
                                  <td>42</td>
                                  <td>2010/12/22</td>
                                  <td>$92,575</td>
                              </tr>
                              <tr>
                                  <td>Jennifer Chang</td>
                                  <td>Regional Director</td>
                                  <td>Singapore</td>
                                  <td>28</td>
                                  <td>2010/11/14</td>
                                  <td>$357,650</td>
                              </tr>
                              <tr>
                                  <td>Brenden Wagner</td>
                                  <td>Software Engineer</td>
                                  <td>San Francisco</td>
                                  <td>28</td>
                                  <td>2011/06/07</td>
                                  <td>$206,850</td>
                              </tr>
                              <tr>
                                  <td>Fiona Green</td>
                                  <td>Chief Operating Officer (COO)</td>
                                  <td>San Francisco</td>
                                  <td>48</td>
                                  <td>2010/03/11</td>
                                  <td>$850,000</td>
                              </tr>
                              <tr>
                                  <td>Shou Itou</td>
                                  <td>Regional Marketing</td>
                                  <td>Tokyo</td>
                                  <td>20</td>
                                  <td>2011/08/14</td>
                                  <td>$163,000</td>
                              </tr>
                              <tr>
                                  <td>Michelle House</td>
                                  <td>Integration Specialist</td>
                                  <td>Sidney</td>
                                  <td>37</td>
                                  <td>2011/06/02</td>
                                  <td>$95,400</td>
                              </tr>
                              <tr>
                                  <td>Suki Burks</td>
                                  <td>Developer</td>
                                  <td>London</td>
                                  <td>53</td>
                                  <td>2009/10/22</td>
                                  <td>$114,500</td>
                              </tr>
                              <tr>
                                  <td>Prescott Bartlett</td>
                                  <td>Technical Author</td>
                                  <td>London</td>
                                  <td>27</td>
                                  <td>2011/05/07</td>
                                  <td>$145,000</td>
                              </tr>
                              <tr>
                                  <td>Gavin Cortez</td>
                                  <td>Team Leader</td>
                                  <td>San Francisco</td>
                                  <td>22</td>
                                  <td>2008/10/26</td>
                                  <td>$235,500</td>
                              </tr>
                              <tr>
                                  <td>Martena Mccray</td>
                                  <td>Post-Sales support</td>
                                  <td>Edinburgh</td>
                                  <td>46</td>
                                  <td>2011/03/09</td>
                                  <td>$324,050</td>
                              </tr>
                              <tr>
                                  <td>Unity Butler</td>
                                  <td>Marketing Designer</td>
                                  <td>San Francisco</td>
                                  <td>47</td>
                                  <td>2009/12/09</td>
                                  <td>$85,675</td>
                              </tr>
                              <tr>
                                  <td>Howard Hatfield</td>
                                  <td>Office Manager</td>
                                  <td>San Francisco</td>
                                  <td>51</td>
                                  <td>2008/12/16</td>
                                  <td>$164,500</td>
                              </tr>
                              <tr>
                                  <td>Hope Fuentes</td>
                                  <td>Secretary</td>
                                  <td>San Francisco</td>
                                  <td>41</td>
                                  <td>2010/02/12</td>
                                  <td>$109,850</td>
                              </tr>
                              <tr>
                                  <td>Vivian Harrell</td>
                                  <td>Financial Controller</td>
                                  <td>San Francisco</td>
                                  <td>62</td>
                                  <td>2009/02/14</td>
                                  <td>$452,500</td>
                              </tr>
                          </tbody>				  
                          <tfoot>
                              <tr>
                                  <th>Name</th>
                                  <th>Position</th>
                                  <th>Office</th>
                                  <th>Age</th>
                                  <th>Start date</th>
                                  <th>Salary</th>
                              </tr>
                          </tfoot>
                      </table>
                      </div>
				  </div>
				  <div class="box-footer">
					<p>A footer for more content inside</p>
				  </div>
				</div>
              </div>
            
              {{-- other ministries --}}
              <div class="col-sm-3 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
					<h4 class="box-title text-uppercase"><strong>Ministry list</strong></h4>
				  </div>
				  <div class="box-body">
					<div class="media-list media-list-hover media-list-divided">
                        @foreach ($minitries as $key=>$ministry)
                            <a class="media media-single" href="{{ route('admin.ministry.show', $ministry->id) }}">
                                <span class="badge badge-pill badge-danger-light">{{ $key + 1 }}</span>
                                <span class="title text-capitalize">{{ $ministry->name }} department</span>
                            </a>
                        @endforeach
					  </div>
				  </div>
				  <div class="box-footer">
					<p>A footer for more content inside</p>
				  </div>
				</div>
			  </div>
        </div>
      </section>

    </div>
</div>

@endsection