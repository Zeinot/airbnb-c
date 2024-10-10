@extends("layouts.custom.admin")
@section("content")
    <div
        class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
    >
        <button type="button" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Create</button>

        <table id="default-table">
            <thead>
            <tr>
                <th>
                <span class="flex items-center">
                    Name
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                </th>
                <th data-type="date" data-format="YYYY/DD/MM">
                <span class="flex items-center">
                    Release Date
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                </th>
                <th>
                <span class="flex items-center">
                    NPM Downloads
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                </th>
                <th>
                <span class="flex items-center">
                    Growth
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Flowbite</td>
                <td>2021/25/09</td>
                <td>269000</td>
                <td>49%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">React</td>
                <td>2013/24/05</td>
                <td>4500000</td>
                <td>24%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Angular</td>
                <td>2010/20/09</td>
                <td>2800000</td>
                <td>17%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Vue</td>
                <td>2014/12/02</td>
                <td>3600000</td>
                <td>30%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Svelte</td>
                <td>2016/26/11</td>
                <td>1200000</td>
                <td>57%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Ember</td>
                <td>2011/08/12</td>
                <td>500000</td>
                <td>44%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Backbone</td>
                <td>2010/13/10</td>
                <td>300000</td>
                <td>9%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">jQuery</td>
                <td>2006/28/01</td>
                <td>6000000</td>
                <td>5%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Bootstrap</td>
                <td>2011/19/08</td>
                <td>1800000</td>
                <td>12%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Foundation</td>
                <td>2011/23/09</td>
                <td>700000</td>
                <td>8%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Bulma</td>
                <td>2016/24/10</td>
                <td>500000</td>
                <td>7%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Next.js</td>
                <td>2016/25/10</td>
                <td>2300000</td>
                <td>45%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Nuxt.js</td>
                <td>2016/16/10</td>
                <td>900000</td>
                <td>50%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Meteor</td>
                <td>2012/17/01</td>
                <td>1000000</td>
                <td>10%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Aurelia</td>
                <td>2015/08/07</td>
                <td>200000</td>
                <td>20%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Inferno</td>
                <td>2016/27/09</td>
                <td>100000</td>
                <td>35%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Preact</td>
                <td>2015/16/08</td>
                <td>600000</td>
                <td>28%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Lit</td>
                <td>2018/28/05</td>
                <td>400000</td>
                <td>60%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Alpine.js</td>
                <td>2019/02/11</td>
                <td>300000</td>
                <td>70%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Stimulus</td>
                <td>2018/06/03</td>
                <td>150000</td>
                <td>25%</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Solid</td>
                <td>2021/05/07</td>
                <td>250000</td>
                <td>80%</td>
            </tr>
            </tbody>
        </table>
        @vite("resources/js/admin_app.js")


    </div>

@endsection
