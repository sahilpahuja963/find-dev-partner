@extends('content/page-layouts/layout-boxed')

@section('content')
    <section id="Project_view">
        <div class="d-flex justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Name</h4>
                    </div>
                    <div class="card-body">
                        <div class="media-list">
                            <div class="media">
                                <div class="media-left">
                                    <img
                                            src="<?php echo e(asset('images/portrait/small/avatar-s-3.jpg')); ?>"
                                            alt="avatar"
                                            height="100"
                                            width="100"
                                            class="cursor-pointer"
                                    />
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading font-weight-bolder">Description</h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentiu</p>
                                </div>
                            </div>
                        </div>
                        <h6 class="apply-job-title mt-2 font-weight-bolder">Technologies Used</h6>
                        <div class="badge badge-pill badge-light-primary">Web Development</div>
                        <div class="badge badge-pill badge-light-secondary">Laravel</div>
                        <h6 class="apply-job-title mt-2 font-weight-bolder">Team Members</h6>
                        <div class="col-6 mb-1">
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="media">
                                    <div class="avatar mr-75">
                                        <img
                                                src="<?php echo e(asset('images/portrait/small/avatar-s-9.jpg')); ?>"
                                                class="rounded"
                                                width="42"
                                                height="42"
                                                alt="Avatar"
                                        />
                                    </div>
                                    <div class="media-body my-auto">
                                        <h6 class="mb-0">Ryan Harrington</h6>
                                        <small>Web Devloper</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted mr-75">9hr 20m</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-1">
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="media">
                                    <div class="avatar mr-75">
                                        <img
                                                src="<?php echo e(asset('images/portrait/small/avatar-s-20.jpg')); ?>"
                                                class="rounded"
                                                width="42"
                                                height="42"
                                                alt="Avatar"
                                        />
                                    </div>
                                    <div class="media-body my-auto">
                                        <h6 class="mb-0">Ryan Harrington</h6>
                                        <small>Web Devloper</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted mr-75">9hr 20m</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-1">
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="media">
                                    <div class="avatar mr-75">
                                        <img
                                                src="<?php echo e(asset('images/portrait/small/avatar-s-1.jpg')); ?>"
                                                class="rounded"
                                                width="42"
                                                height="42"
                                                alt="Avatar"
                                        />
                                    </div>
                                    <div class="media-body my-auto">
                                        <h6 class="mb-0">Ryan Harrington</h6>
                                        <small>Web Devloper</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted mr-75">9hr 20m</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        </div>
                        <h6 class="apply-job-title mt-2 font-weight-bolder">DeadLine</h6>
                        <div>21/05/2022</div>
                        <h6 class="apply-job-title mt-2 font-weight-bolder">Status</h6>
                        <div class="text-success font-weight-bolder">OnGoing</div>
                        <button class="btn btn-outline-primary mt-2 d-block">View Board</button>
                        <div class="d-flex justify-content-end">
                            <div></div>
                            <div>
                                <button class="btn btn-secondary mt-2">Back</button>
                                <button class="btn btn-primary mt-2">Contribute</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection