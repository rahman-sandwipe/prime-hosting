<section class="compare-part section-ptb-100 section-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">{{ $attribute->attribute_name }}</h2>
                    <h3 class="section-title">select <span>hosting plan</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-hover compare-table">
                        <thead id="hostingPan">
                            @if($packages->count())
                            <tr>
                                <th scope="col">
                                    <div class="compare-image">
                                        <img src="{{ asset('images/partials/05.png') }}" alt="hero">
                                    </div>
                                </th>
                                @foreach($packages as $package)
                                <th scope="col">
                                    <div class="compare-head">
                                        <h3 class="compare-plan">{{ $package->name }}</h3>
                                        <h4 class="compare-tagline">{{ $package->description }}</h4>
                                        <h5 class="compare-price">$ {{ $package->price_monthly }}<span>/ mo</span></h5>
                                        <h4 class="compare-discount">$ {{ $package->price_yearly }}<span>/ yr</span></h4>
                                        <a class="compare-purchase" href="{{ url($package->card_api) }}">get now</a>
                                    </div>
                                </th>
                                @endforeach
                            </tr>
                            @endif
                        </thead>
                        <tbody class="compare-content">
                            <tr>
                                <th colspan="4">
                                    <h5 class="compare-heading">support features</h5>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="compare-group">
                                        <h6 class="compare-title">24/7 live chat</h6>
                                        <p class="compare-tooltip"><i class="fas fa-question-circle"></i><span>Lorem
                                                ipsum dolor sit amet elit Quasi ipsum excepturi magni</span></p>
                                    </div>
                                </th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="compare-group">
                                        <h6 class="compare-title">24/7 help desk</h6>
                                        <p class="compare-tooltip"><i class="fas fa-question-circle"></i><span>Lorem
                                                ipsum dolor sit amet elit Quasi ipsum excepturi magni</span></p>
                                    </div>
                                </th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="compare-group">
                                        <h6 class="compare-title">instant setup</h6>
                                        <p class="compare-tooltip"><i class="fas fa-question-circle"></i><span>Lorem
                                                ipsum dolor sit amet elit Quasi ipsum excepturi magni</span></p>
                                    </div>
                                </th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="compare-group">
                                        <h6 class="compare-title">Transfer Assistance</h6>
                                        <p class="compare-tooltip"><i class="fas fa-question-circle"></i><span>Lorem
                                                ipsum dolor sit amet elit Quasi ipsum excepturi magni</span></p>
                                    </div>
                                </th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>