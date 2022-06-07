<!DOCTYPE html>

<html lang="en">

<head>
    @include('backend.head')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('backend.menu')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('backend.topbar')
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card col-10 mx-auto">
                                <div class="card-header"><strong>Daily report</strong></div>
                                <div class="card-body">
                                    
                                    <table class="table table-responsive-sm text-center " >
                                        <thead>
                                            <tr>
                                                <th>บริษัท</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวน</th>
                                                <th>ราคารวม</th>
                                                <th>date</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            @include('backend/footer')
        </div>
    </div>


</body>

</html>