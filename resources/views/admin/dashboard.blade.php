@extends('admin.template.main')


@section('content')



                        <div class="x_content">

                            <div class="row">


                                <div class="col-md-2 col-sm-2 col-xs-12 form-group mt-mid">
                                	<a href="{{ route('muhesnah') }}">
	                                	<img class="dash-ico" src="{{ URL::asset('img/market-01.png')}}"/>
	                                	<h3>Muhesnah 4th</h3>
                                	</a>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12 form-group mt-mid">
                                	<a href="{{route('muteena')}}">
                                		 <img class="dash-ico" src="{{ URL::asset('img/market-02.png')}}"/>
                                	 	<h3>Oud Al-Muteena 500</h3>
                                	</a>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12 form-group mt-mid">
                                	<a href="{{route('datatables')}}">
                                    	<img class="dash-ico" src="{{ URL::asset('img/market-03.png')}}"/>
                                    	<h3>Oud Al-Muteena 397</h3>
                                    </a>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12 form-group mt-mid">
                                	<a href="{{ route('admin.qouz.index') }}">
                                    	<img class="dash-ico" src="{{ URL::asset('img/market-04.png')}}"/>
                                    	<h3>Al-Qouz 2nd</h3>
                                    </a>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12 form-group mt-mid">
                                	<a href="/">
                                    	<img class="dash-ico" src="{{ URL::asset('img/market-05.png')}}"/>
                                    	<h3>Hatta Makan 346</h3>
                                    </a>
                                </div>

                                
                            </div>

                        </div>
                    

@endsection

@include('messages')