@php
    $rows = [
        ['task' => 'Property Investment Specialists', 'innovative' => true, 'banks' => false],
        ['task' => 'Understanding of House & Land, Construction, Granny flat, renovation and sub-division', 'innovative' => true, 'banks' => false],
        ['task' => 'Vast Understanding of Property Investment Structures', 'innovative' => true, 'banks' => false],
        ['task' => 'Property Management Australia Wide', 'innovative' => true, 'banks' => false],
        ['task' => 'Guidance throughout the whole Purchase Process', 'innovative' => true, 'banks' => false],
        ['task' => 'Detailed explanation and reports on purchase costs', 'innovative' => true, 'banks' => false],
        ['task' => 'Planning towards a future purchases', 'innovative' => true, 'banks' => false],
        ['task' => 'Liaison with your Real Estate Agent and Conveyancer', 'innovative' => true, 'banks' => false],
        ['task' => 'Specialist mortgage planning & structuring', 'innovative' => true, 'banks' => false],
        ['task' => 'Collaboration with accountants, financial planners and other affiliates for your mutual progress', 'innovative' => true, 'banks' => false],
        ['task' => 'Available after 5pm & on Weekends', 'innovative' => true, 'banks' => false],
        ['task' => 'Assistance with bad credit', 'innovative' => true, 'banks' => false],
        ['task' => 'Negotiation on cheaper rates and application fees (Some cases)', 'innovative' => true, 'banks' => false],
        ['task' => 'Access to and knowledge of entire mortgage market', 'innovative' => true, 'banks' => false],
        ['task' => 'Comparison of over 30 lenders for your convenience', 'innovative' => true, 'banks' => false],
        ['task' => 'Detailed Property Value Reports FREE (RP data)', 'innovative' => true, 'banks' => false],
        ['task' => 'General explanation of products and policies', 'innovative' => true, 'banks' => true],
        ['task' => 'Explanation of the loan application process', 'innovative' => true, 'banks' => true],
        ['task' => 'Offer banks ( their own ) products and interest rates', 'innovative' => true, 'banks' => true],
        ['task' => 'Submit loan application', 'innovative' => true, 'banks' => true],
    ];
@endphp

<section class="loan-bank-vs fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth">
    <div class="loan-bank-vs__container">
        <div class="table-1 loan-bank-vs__table-wrap">
            <p><strong>Compare our service with the service that you can expect from your bank.</strong></p>
            <p>We pride ourselves on offering a service that adds value over and above other providers.</p>
            <table class="loan-bank-vs__table" width="100%">
                <thead>
                    <tr>
                        <th align="left">TASK</th>
                        <th align="left">INNOVATIVE<br>WEALTH</th>
                        <th align="left">BANKS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr>
                            <td align="left">{{ $row['task'] }}</td>
                            <td align="left"><b>{{ $row['innovative'] ? '✔' : '✘' }}</b></td>
                            <td align="left"><b>{{ $row['banks'] ? '✔' : '✘' }}</b></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
