var ctx = document.getElementById('myChart');
                                var myChart = new Chart(ctx, {
                                                                type: 'horizontalBar',
                                                                data: {
                                                                        labels: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'],
                                                                        datasets: [
                                                                                    {
                                                                                        label: 'ปี2561',
                                                                                        data: [
                                                                                                1696,1837,1936,1652,2272,2272,1872,1875,2317,1898,1976,1293
                                                                                              ],
                                                                                        backgroundColor: 'rgba(113, 171, 221)'
                                                                                    },
                                                                                    {
                                                                                        label: 'ปี2562',
                                                                                        data: [
                                                                                                1817,2026,2259,1781,2102,2545
                                                                                              ],
                                                                                        backgroundColor: 'rgba(153, 119, 180)'
                                                                                    }
                                                                                    ,
                                                                                    {
                                                                                        label: 'เป้าหมาย',
                                                                                        data: [
                                                                                                1611,1745,1839,1569,2159,2159,1778,1781,2201,1803,1878,1228
                                                                                              ],
                                                                                        backgroundColor: 'rgba(182, 216, 132)'
                                                                                    }

                                                                                ]
                                                                        },
                                                                options: {
                                                                            responsive: true,
                                                                            scales: {
                                                                                yAxes: [{
                                                                                    ticks: {
                                                                                        beginAtZero: true
                                                                                    }
                                                                                }]
                                                                            },
                                                                            legend: {
                                                                                display: true
                                                                            }
                                                                        }
                                                                });

var ctx2 = document.getElementById('myChart2');
                                var myChart = new Chart(ctx2, {
                                                                type: 'horizontalBar',
                                                                data: {
                                                                        labels: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'],
                                                                        datasets: [
                                                                                    {
                                                                                        label: 'ปี2561',
                                                                                        data: [
                                                                                                107,111,115,134,110,116,126,110,128,132,128,163
                                                                                              ],
                                                                                        backgroundColor: 'rgba(113, 171, 221)'
                                                                                    },
                                                                                    {
                                                                                        label: 'ปี2562',
                                                                                        data: [
                                                                                                120,132,122,126,139,137
                                                                                              ],
                                                                                        backgroundColor: 'rgba(153, 119, 180)'
                                                                                    }
                                                                                    ,
                                                                                    {
                                                                                        label: 'เป้าหมาย',
                                                                                        data: [
                                                                                            107,111,115,134,110,116,126,110,128,132,128,163
                                                                                              ],
                                                                                        backgroundColor: 'rgba(182, 216, 132)'
                                                                                    }

                                                                                ]
                                                                        },
                                                                options: {
                                                                            responsive: true,
                                                                            scales: {
                                                                                yAxes: [{
                                                                                    ticks: {
                                                                                        beginAtZero: true
                                                                                    }
                                                                                }]
                                                                            },
                                                                            legend: {
                                                                                display: true
                                                                            }
                                                                        }
                                                                });

var ctx3 = document.getElementById('myChart3');
                                var myChart = new Chart(ctx3, {
                                                                type: 'horizontalBar',
                                                                data: {
                                                                        labels: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'],
                                                                        datasets: [
                                                                                    {
                                                                                        label: 'ปี2561',
                                                                                        data: [
                                                                                                8341,10072,13045,13150,13017,13709,13823,12051,12582,13104,11134,10863
                                                                                              ],
                                                                                        backgroundColor: 'rgba(113, 171, 221)'
                                                                                    },
                                                                                    {
                                                                                        label: 'ปี2562',
                                                                                        data: [
                                                                                                9687,10847,12931,13497,13938,13165
                                                                                              ],
                                                                                        backgroundColor: 'rgba(153, 119, 180)'
                                                                                    }
                                                                                    ,
                                                                                    {
                                                                                        label: 'เป้าหมาย',
                                                                                        data: [
                                                                                            8721,10530,13638,13748,13609,14333,14452,12599,13155,13700,11640,11357
                                                                                              ],
                                                                                        backgroundColor: 'rgba(182, 216, 132)'
                                                                                    }

                                                                                ]
                                                                        },
                                                                options: {
                                                                            responsive: true,
                                                                            scales: {
                                                                                yAxes: [{
                                                                                    ticks: {
                                                                                        beginAtZero: true
                                                                                    }
                                                                                }]
                                                                            },
                                                                            legend: {
                                                                                display: true
                                                                            }
                                                                        }
                                                                });