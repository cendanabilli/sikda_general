
						<!-- BEGIN: Subheader -->
					<!-- 	<div class="m-subheader ">
							<div class="d-flex align-items-center">
								<div class="mr-auto">
									<h3 class="m-subheader__title ">Pendaftaran</h3>
								</div>
								<div>
									<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
										<span class="m-subheader__daterange-label">
											<span class="m-subheader__daterange-title"></span>
											<span class="m-subheader__daterange-date m--font-brand"></span>
										</span>
										<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
											<i class="la la-angle-down"></i>
										</a>
									</span>
								</div>
							</div>
						</div>
 -->
						<!-- END: Subheader -->
						<div class="m-content">
							<!-- <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
								<div class="m-alert__icon">
									<i class="flaticon-exclamation m--font-brand"></i>
								</div>
								<div class="m-alert__text">
									With server-side processing enabled, all paging, searching, ordering actions that DataTables performs are handed off to a server where an SQL engine (or similar) can perform these actions on the large data set.
									See official documentation <a href="https://datatables.net/examples/data_sources/server_side.html" target="_blank">here</a>.
								</div>
							</div> -->
							<div class="m-portlet m-portlet--mobile">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<h3 class="m-portlet__head-text">
												Pendaftaran Pasien
											</h3>
										</div>
									</div>
									<div class="m-portlet__head-tools">
										<ul class="m-portlet__nav">
											<li class="m-portlet__nav-item">
												<a href="<?php echo base_url() ?>transaksi/pendaftaran/add.html" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
													<span>
														<i class="la la-cart-plus"></i>
														<span>Pendaftaran</span>
													</span>
												</a>
											</li>
											<!-- <li class="m-portlet__nav-item"></li>
											<li class="m-portlet__nav-item">
												<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Quick Actions</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Create Post</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Send Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																				<span class="m-nav__link-text">Upload File</span>
																			</a>
																		</li>
																		<li class="m-nav__section">
																			<span class="m-nav__section-text">Useful Links</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit m--hide">
																		</li>
																		<li class="m-nav__item m--hide">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li> -->
										</ul>
									</div>
								</div>
								<div class="m-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Rekam Medis</th>
												<th>CM Lama</th>
												<th>Nama Pasien</th>
												<th>KK</th>
												<th>Tanggal Lahir</th>
												<th>Umur</th>
												<th>Alamat</th>
												<!-- <th>Pelayanan</th> -->
												
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
												<script type="text/javascript">
													var table;
													$(document).ready(function() {

					        //datatables
					        table = $('#table').DataTable({ 

					        	"processing": true, 
					        	"serverSide": true, 
					        	"order": [], 

					        	"ajax": {
					        		"url": "<?php echo base_url().'transaksi/Pendaftaran/getAjaxDataPendaftaran'?>",
					        		"type": "POST"
					        	},


					        	"columnDefs": [
					        	{ 
					        		"targets": [ 0 ], 
					        		"orderable": false, 
					        	},
					        	],

					        });

					    });
					</script>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					