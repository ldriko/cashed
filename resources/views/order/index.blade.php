<x-layout title="Orders">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-grid gap-4">
                    <div class="hstack gap-2">
                        <select name="category_id" id="category_id" class="form-control w-auto">
                            <option value="">Semua kategori</option>
                        </select>

                        <div class="input-group">
                            <input type="text" placeholder="Cari product" class="form-control" name="search"
                                autofocus>
                        </div>

                        <button type="submit" class="btn btn-dark">Cari</button>
                    </div>

                    <div class="row g-4">
                        <div class="col-3">
                            <div class="card product-card">
                                <img src="https://www.themealdb.com/images/media/meals/qtuwxu1468233098.jpg"
                                    alt="Product 1" class="card-img-top border-bottom">
                                <div class="card-body">
                                    <div class="fw-bold">Product 1</div>
                                    <div class="hstack">
                                        <small>Kategori</small>
                                        <small class="ms-auto">Rp10.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body border-bottom fw-bold">Summary</div>

                    <div class="card-body border-bottom">
                        <x-text-input name="customer" label="Customer" default="-"></x-text-input>
                    </div>

                    <div class="card-body bg-body-tertiary border-bottom">
                        <div class="vstack gap-2">
                            <div class="card product-card">
                                <div class="card-body">
                                    <div>Product 1</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-text">3 x 10.000</div>
                                        <div class="ms-auto form-text">Rp30.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body border-bottom d-grid gap-2">
                        <div class="d-flex justify-content-between">
                            <div>Total</div>
                            <h4 class="ms-auto mb-0 fw-bold">Rp30.000</h4>
                        </div>
                        <div>
                            <x-text-input name="payment" label="Payment" type="number"></x-text-input>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-row-reverse justify-content-between">
                        <button class="ms-auto btn btn-dark">Checkout</button>
                        <button name="cancel" class="btn btn-light">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
