@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
	<script type="text/javascript">
        $(document).ready(function() {
            $('#detailTable').DataTable();
        });
	</script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

	<style type="text/css">
		/* Hazır */

		.fordtreeview{
			width: 100%;
			border-color: 1px solid green;
		}
		.fordtreeview ul{
			display:none;
			margin: 15px -16px;
			list-style:none;
		}

		.fordtreeview ul.expanded{
			display:block;
		}

		.fordtreeview ul li{
			left:30px;
			margin-right:40px;
			color: #333;
		}

		.fordtreeview > li:first-child{
			display:block !important;
		}

		.fordtreeview li,
		.fordtreeview a{
			color: #333;
			text-decoration:none;
			cursor:pointer;
		}

		.fordtreeview i.glyphicon{
			margin-right:5px;
		}

		.subactivated,
		.fordtreeview > li:not(:first-child):hover{
			background-color: #deeed4;
		}

		.list-group-item {
			border: 1px solid #828282;
		}
	</style>
	<script type="text/javascript">
        $(document).ready(function () {
            $('.hasSub').click(function () {
                $(this).parent().toggleClass('subactivated');
                $(this).parent().children('ul:first').toggle();


            });

            $(".menufilter").keyup(function () {
                //$(this).addClass('hidden');

                var searchTerm = $(".menufilter").val();
                var listItem = $('.fordtreeview').children('li');

                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                //extends :contains to be case insensitive
                $.extend($.expr[':'], {
                    'containsi': function(elem, i, match, array)
                    {
                        return (elem.textContent || elem.innerText || '').toLowerCase()
                                .indexOf((match[3] || "").toLowerCase()) >= 0;
                    }
                });

                $(".fordtreeview li").not(":containsi('" + searchSplit + "')").each(function(e)   {
                    $(this).hide()
                });

                $(".fordtreeview li:containsi('" + searchSplit + "')").each(function(e) {
                    $(this).show();
                });
            });
        });
	</script>

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div id="narrow-browser-alert" class="alert alert-success text-center">
				<strong><h4>Organization Structure of Aerofood ACS</h4></strong>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<ul class="fordtreeview list-group col-md-2">
				<li class="list-group-item">
					<label for="ORGSearch">Organization Structure Search</label>
					{{--<input type="text" name="ORGSearch" id="FAQSearch" /><input type="submit" id="SearchFAQ" value="search" />--}}
					<input type="text" class="form-control menufilter" placeholder="Search..."/>
				</li>
				@foreach($divisi as $org_struk)
					<li class="list-group-item">

						<span class="hasSub">
							<i class="glyphicon glyphicon-globe"></i>
							Divisi {{$org_struk->nama_divisi. ' ' . $org_struk->id_divisi}}
								<button
										onclick="window.location.href='/struktur/{{$org_struk->id_divisi}}/edit?name=divisi'"
										class="text-right"
										type="submit">
											<i class="glyphicon glyphicon-globe"></i>
											edit Divisi
								</button>
								<button
									onclick="window.location.href='/struktur/create?name=unit'"
									class="text-right"
									type="submit">
											<i class="fa fa-plus-circle" aria-hidden="true"></i>
											add Unit
								</button>
						</span>

						<ul class="list-group">
							@foreach($org_struk['unit'] as $value)
								<li class="list-group-item">
									@foreach($units as $unit)
										@if($value->id_unit == $unit->id_unit)
											<span class="hasSub"><i class="glyphicon glyphicon-map-marker"></i> Unit {{$unit->nama_unit}}
												<button
														onclick="window.location.href='/struktur/{{$unit->id_unit}}/edit'"
														class="text-right"
														type="submit">
													<i class="glyphicon glyphicon-map-marker"></i>
													edit Unit
												</button>
												<button
														onclick="window.location.href='/struktur/create?name=department'"
														class="text-right"
														type="submit">
													<i class="fa fa-plus-circle" aria-hidden="true"></i>
															add Department
												</button>
											</span>
										@endif
									@endforeach
									<ul class="list-group">
										@foreach($value['department'] as $department)
											<li class="list-group-item">
												@foreach($departments as $deps)
													@if($deps->id_department == $department->id_department)
															<span class="hasSub"><i class="glyphicon glyphicon-adjust"></i> Department {{$deps->nama_departmen}}
																<input value="department" name="name" hidden>
																<button
																		onclick="window.location.href='/struktur/{{$deps->id_department}}/edit'"
																		class="text-right"
																		type="submit">
																	<i class="glyphicon glyphicon-adjust"></i>
																	edit Department
																</button>
																<button
																		onclick="window.location.href='/struktur/create?name=section'"
																		class="text-right"
																		type="submit">
																	<i class="fa fa-plus-circle" aria-hidden="true"></i>
																			add Section
																</button>
															</span>

													@endif
												@endforeach

												<!-- List of section -->
												<ul class="list-group">
													@foreach($department['section'] as $section)
														@if(!empty($section))
															@foreach($sections as $sect)
																@if($sect->id_section == $section->id_section)
																	<form action="/struktur/{{$sect->id_section}}/edit" method="get">
																		<li class="list-group-item">
																			<i class="glyphicon glyphicon-tint"></i>
																			{{$sect->nama_section}}
																			<input value="section" name="name" hidden>
																			<button
																					onclick="window.location.href='/struktur/{{$sect->id_section}}/edit'"
																					class="text-right"
																					type="submit">
																				<i class="glyphicon glyphicon-tint"></i>
																				edit Section
																			</button>
																		</li>
																	</form>
																	{{--<button type="button" class="list-group-item">--}}
																		{{--{{$sect->nama_section}}</button>--}}
																@endif
															@endforeach
														@elseif(empty($section))
																	<li class="list-group-item">
																		tidak memiliki section
																	</li>
														@endif
													@endforeach
												</ul>

												{{--<ul class="list-group">--}}
													{{--<li class="list-group-item"><i class="glyphicon glyphicon-tint"></i> Section A2a1</li>--}}
													{{--<li class="list-group-item"><i class="glyphicon glyphicon-tint"></i> Section A2a2</li>--}}
												{{--</ul>--}}
											</li>
										@endforeach
									</ul>
								</li>
							@endforeach
						</ul>
					</li>
				@endforeach
			</ul>
		</div>
	</div>


	{{--<script>--}}
	{{--$('#SearchFAQ').click(function () {--}}
	{{--$('#FAQ').children('div.TopicContents').hide().children('div.Answer').hide();--}}
	{{--if ($('#FAQSearch').val() != '') {--}}
	{{--$('div.Answer:Contains(' + $('#FAQSearch').val().toUpperCase() + ')').show().parent().show(300);--}}
	{{--try {--}}
	{{--$('.highlight').removeClass("highlight");--}}
	{{--$('div.Answer:Contains(' + $('#FAQSearch').val().toUpperCase() + ')').each(function () {--}}
	{{--$(this).html(--}}
	{{--$(this).html().replace(--}}
	{{--new RegExp($('#FAQSearch').val(), "ig"),--}}
	{{--function(match) {--}}
	{{--return '<span class="highlight">' + match + '</span>';--}}
	{{--}--}}
	{{--)--}}
	{{--)--}}
	{{--});--}}
	{{--}--}}
	{{--catch (err) {--}}
	{{--}--}}
	{{--}--}}
	{{--return false;--}}
	{{--});--}}
	{{--</script>--}}

@endsection
