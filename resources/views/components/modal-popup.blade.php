    @if(!Route::is(['invoices-cancelled','invoices-draft','invoices-overdue','invoices-paid','invoices-recurring']))
    <!-- Invoices Preview Modal -->
    <div class="modal custom-modal fade invoices-preview" id="invoices_preview" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card invoice-info-card">
                            <div class="card-body pb-0">
                                <div class="invoice-item invoice-item-one">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="invoice-logo">
                                                <img src="{{ URL::asset('/assets/img/logo.png')}}" alt="logo">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="invoice-info">
                                                <div class="invoice-head">
                                                    <h2 class="text-primary">Invoice</h2>
                                                    <p>Invoice Number : In983248782</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Invoice Item -->
                                <div class="invoice-item invoice-item-bg">
                                    <div class="invoice-circle-img">
                                        <img src="{{ URL::asset('/assets/img/invoice-circle1.png')}}" alt="" class="invoice-circle1">
                                        <img src="{{ URL::asset('/assets/img/invoice-circle2.png')}}" alt="" class="invoice-circle2">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="invoice-info">
                                                <strong class="customer-text-one">Billed to</strong>
                                                <h6 class="invoice-name">Customer Name</h6>
                                                <p class="invoice-details invoice-details-two">
                                                    9087484288 <br>
                                                    Address line 1, <br>
                                                    Address line 2 <br>
                                                    Zip code ,City - Country
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="invoice-info">
                                                <strong class="customer-text-one">Invoice From</strong>
                                                <h6 class="invoice-name">Company Name</h6>
                                                <p class="invoice-details invoice-details-two">
                                                    9087484288 <br>
                                                    Address line 1, <br>
                                                    Address line 2 <br>
                                                    Zip code ,City - Country
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="invoice-info invoice-info-one border-0">
                                                <p>Issue Date : 27 Jul 2022</p>
                                                <p>Due Date : 27 Aug 2022</p>
                                                <p>Due Amount : $ 1,54,22 </p>
                                                <p>Recurring Invoice : 15 Months</p>
                                                <p class="mb-0">PO Number : 54515454</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice Item -->

                                <!-- Invoice Item -->
                                <div class="invoice-item invoice-table-wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="invoice-table table table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Category</th>
                                                            <th>Rate/Item</th>
                                                            <th>Quantity</th>
                                                            <th>Discount (%)</th>
                                                            <th class="text-end">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Dell Laptop</td>
                                                            <td>Laptop</td>
                                                            <td>$1,110</td>
                                                            <th>2</th>
                                                            <th>2%</th>
                                                            <td class="text-end">$400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>HP Laptop</td>
                                                            <td>Laptop</td>
                                                            <td>$1,500</td>
                                                            <th>3</th>
                                                            <th>6%</th>
                                                            <td class="text-end">$3,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apple Ipad</td>
                                                            <td>Ipad</td>
                                                            <td>$11,500</td>
                                                            <th>1</th>
                                                            <th>10%</th>
                                                            <td class="text-end">$11,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice Item -->

                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="invoice-payment-box">
                                            <h4>Payment Details</h4>
                                            <div class="payment-details">
                                                <p>Debit Card XXXXXXXXXXXX-2541 HDFC Bank</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="invoice-total-card">
                                            <div class="invoice-total-box">
                                                <div class="invoice-total-inner">
                                                    <p>Taxable <span>$6,660.00</span></p>
                                                    <p>Additional Charges <span>$6,660.00</span></p>
                                                    <p>Discount <span>$3,300.00</span></p>
                                                    <p class="mb-0">Sub total <span>$3,300.00</span></p>
                                                </div>
                                                <div class="invoice-total-footer">
                                                    <h4>Total Amount <span>$143,300.00</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-sign-box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="invoice-terms">
                                                <h6>Notes:</h6>
                                                <p class="mb-0">Enter customer notes or any other details</p>
                                            </div>
                                            <div class="invoice-terms mb-0">
                                                <h6>Terms and Conditions:</h6>
                                                <p class="mb-0">Enter customer notes or any other details</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="invoice-sign text-end">
                                                <img class="img-fluid d-inline-block" src="{{ URL::asset('/assets/img/signature.png')}}" alt="sign">
                                                <span class="d-block">Harristemp</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Invoices Preview Modal -->

    <!-- Add Invoices Modal -->
    <div class="modal custom-modal fade bank-details" id="bank_details" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="form-header text-start mb-0">
                    <h4 class="mb-0">Add Bank Details</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bank-inner-details">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Account Holder Name</label>
                                <input type="text" class="form-control" placeholder="Add Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Bank name</label>
                                <input type="text" class="form-control" placeholder="Add Bank name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>IFSC Code</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="bank-details-btn">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn bank-cancel-btn me-2">Cancel</a>
                    <a href="javascript:void(0);" class="btn bank-save-btn">Save Item</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Add Invoices Modal -->

    <!-- Delete Invoices Modal -->
    <div class="modal custom-modal fade" id="delete_invoices_details" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Invoice Details</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Delete Invoices Modal -->

    <!-- Delete Bank Details Modal -->
    <div class="modal custom-modal fade" id="delete_bank_details" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Bank Details</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Bank Details Modal -->

    <!-- Save Invoices Modal -->
    <div class="modal custom-modal fade" id="save_invocies_details" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Save Invoice Details</h3>
                    <p>Are you sure want to save?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Save Invoices Modal -->
    @endif
    @if(Route::is(['invoices-cancelled','invoices-draft','invoices-overdue','invoices-paid','invoices-recurring']))
    <!-- Delete Paid Modal -->
    <div class="modal custom-modal fade" id="delete_paid" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>{{ $title }}</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Paid Modal -->
    @endif
