@include('layouts.head')


<body>



<div id="wrapper">
    <div class="wrapper-holder">
        @include('layouts.header')

        <section id="main">
            <div class="block-advice">
                <div class = "text-center">
                    <div id="exTab1">
                        <ul  class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a  href="#umum" data-toggle="tab">Forum Umum</a>
                            </li>
                            <li>
                                <a href="#jobfamily" data-toggle="tab">Forum Job Family</a>
                            </li>
                            <li>
                                <a href="#dept" data-toggle="tab">Forum Department</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="umum">
                                <h1>Forum Umum</h1>
                                <p>forum ini ditujukan untuk seluruh karyawan PT Aerofood Indonesia</p>

                                <table id="detailTable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>replies</th>
                                    <th>last post</th>

                                </tr>
                                </thead>
                                    <tbody>

                                        <tr>
                                            <td>satu Topic Discussion</td>
                                            <td>satu Started By</td>
                                            <td>satu replies</td>
                                            <td>satu last post</td>
                                        </tr>
                                        <tr>
                                            <td>satu Topic Discussion</td>
                                            <td>satu Started By</td>
                                            <td>satu replies</td>
                                            <td>satu last post</td>
                                        </tr>
                                        <tr>
                                            <td>satu Topic Discussion</td>
                                            <td>satu Started By</td>
                                            <td>satu replies</td>
                                            <td>satu last post</td>
                                        </tr>
                                        <tr>
                                            <td>satu Topic Discussion</td>
                                            <td>satu Started By</td>
                                            <td>satu replies</td>
                                            <td>satu last post</td>
                                        </tr>
                                        <tr>
                                            <td>satu Topic Discussion</td>
                                            <td>satu Started By</td>
                                            <td>satu replies</td>
                                            <td>satu last post</td>
                                        </tr>


                                    </tbody>
                                </table>


                            </div>


                            <div class="tab-pane" id="jobfamily">
                                <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                            </div>



                            <div class="tab-pane" id="dept">
                                <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</div>

@include('layouts.script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable();
    });
</script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</body>
</html>