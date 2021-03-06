<?php
$key = "Getting Started ng2";
$pageTitle = "Best Angular 2 Data Grid";
$pageDescription = "Demonstrate the best Angular 2 data grid. Shows and example of a data grid for using with Angular 2.";
$pageKeyboards = "Angular 2 Grid";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Best Angular 2 Data Grid</h2>

    <p>
        If you are building an Angular 2 application then you have the choice between A) using the plain JavaScript version
        of ag-Grid or B) using the ag-Grid Angular 2 Component from the <a href="https://github.com/ceolter/ag-grid-ng2">
            ag-grid-ng2</a> project. If you use the ag-Grid Angular 2 Component, then the grid's properties, events and API
        will all tie in with the Angular 2 ecosystem. This will make your Angular 2 coding easier.
    </p>

    <note>
        <p>
            When using Angular 2, you must use the CommonJS distribution of Angular 2 and ag-Grid. That means the
            already bundled ag-Grid and Angular 2 UMD will not work (if you don't know what this means or what these
            are, then don't worry, you will be none the wiser).
        </p>
        <p>If you MUST use the UMD version of Angular 2, then use the plain Javascript version of ag-Grid.</p>
    </note>


    <note>ag-Gird v6.x adds many Angular 2 related improvements to the ag-Grid offering - this includes easier configuration,
        better renderer definition and cell editor support.
    </note>

    <p>Please use the github project <a href="https://github.com/ceolter/ag-grid-ng2">ag-grid-ng2</a>
        for feedback or issue reporting around this functionality.</p>

    <h2>ag-Grid React Features</h2>

    <p>
        Every feature of ag-Grid is available when using the ag-Grid Angular 2 Component. The Angular 2 Component wraps
        the functionality of ag-Grid, it doesn't duplicate, so there will be no difference between core ag-Grid and
        Angular 2 ag-Grid when it comes to features.
    </p>

    <h3>Angular 2 Full Example</h3>

    <p>
        This page goes through the
        <a href="https://github.com/ceolter/ag-grid-ng2-example">ag-grid-ng2-example</a>
        on Github. Because the example depends on SystemX and JSPM, it is not included in the
        online documentation.
    </p>

    <p>The example project includes a number of separate grids on a page, with each section demonstrating a different
        feature set:
    <ul>
        <li>A Feature Rich Grid Example, demonstrating many of ag-Grid's features using Angular 2 as a wrapper</li>
        <li>A Simple Example, using CellRenders created from Angular 2 Components</li>
        <li>A Simple Example, using CellRenders created from Template Strings</li>
        <li>A Richer Example, using CellRenderers created from Angular 2 Components, with child components, and two-way
            binding (parent to child components events)
        </li>
        <li>Cell Editor example - one with a popup editor, and another with a numeric editor. Each demonstrates
            different editor related features
        </li>
        <li>A Float Row Renderer Example</li>
        <li>A Full Width Renderer Example</li>
        <li>An Example demonstrating Group Inner Cell Renderers</li>
    </ul>
    </p>

    <h3>Dependencies</h3>

    <p>
        In your package.json file, specify dependency on ag-grid AND ag-grid-ng2.
        The ag-grid package contains the core ag-grid engine and the ag-grid-ng2
        contains the Angular 2 component.
        <pre>"dependencies": {
    ...
    "ag-grid": "6.0.x",
    "ag-grid-ng2": "6.0.x"
}</pre>
    The major and minor versions should match. Every time a new major or minor
    version of ag-Grid is released, the component will also be released. However
    for patch versions, the component will not be released.
    </p>

    <p>You will then be able to access ag-Grid inside your application:</p>

    <pre>import {AgGridModule} from 'ag-grid-ng2/main';</pre>

    <p>
        Which you can then use as a dependency inside your module:
    </p>

    <pre>@NgModule({
    imports: [
        BrowserModule,
        AgGridModule.withNg2ComponentSupport(),
    ...
})</pre>

    <note>Note: this configuration allows for Angular 2 Components within the grid, but not AOT. If you wish to use AOT please see the
    relevant section <a href="#aot">below</a>.</note>

    <p>
        You will need to include the CSS for ag-Grid, either directly inside
        your html page, or as part of creating your bundle if bundling. Teh following
        shows referencing the css from your web page:
    </p>
    <pre>&lt;link href="node_modules/ag-grid/styles/ag-grid.css" rel="stylesheet" />
&lt;link href="node_modules/ag-grid/styles/theme-fresh.css" rel="stylesheet" />
</pre>

    <p>
        You will also need to configure SystemX for ag-grid and ag-grid-component as follows:
    </p>

    <pre>System.config({
    packages: {
        lib: {
            format: 'register',
            defaultExtension: 'js'
        },
        'ag-grid-ng2': {
            defaultExtension: "js"
        },
        'ag-grid': {
            defaultExtension: "js"
        }
    },
    map: {
        'ag-grid-ng2': 'node_modules/ag-grid-ng2',
        'ag-grid': 'node_modules/ag-grid'
    }
});</pre>

    <p>
        All the above items are specific to either Angular 2 or SystemX. The above is intended to point
        you in the right direction. If you need more information on this, please see the documentation
        for those projects.
    </p>

    <h2 id="aot">Ahead of Time (AOT) Compilation</h2>

    <p>AOT is an option, but if you use AOT you will be <strong>unable</strong> to use Angular 2 Components within the grid.
    This is because of restrictions/limitations within the Angular Compiler.</p>

    <p>In other words, you can either have:
    <ul>
        <li>Angular 2 Components within the grid, and <strong>no</strong> AOT support</li>
        <li>AOT support, and <strong>no</strong> Angular 2 Components within the grid</li>
    </ul></p>

    <p>To enable AOT support, you need to import the following:</p>

    <pre>@NgModule({
    imports: [
        BrowserModule,
        AgGridModule.withAotSupport(),
    ...
})</pre>

    <h2>Configuring ag-Grid in Angular 2</h2>

    <p>You can configure the grid in the following ways through Angular 2:</p>
    <ul>
        <li><b>Events:</b> All data out of the grid comes through events. These use
            Angular 2 event bindings eg <i>(modelUpdated)="onModelUpdated()"</i>.
            As you interact with the grid, the different events are fixed and
            output text to the console (open the dev tools to see the console).
        </li>
        <li><b>Properties:</b> All the data is provided to the grid as Angular 2
            bindings. These are bound onto the ag-Grid properties bypassing the
            elements attributes. The values for the bindings come from the parent
            controller.
        </li>
        <li><b>Attributes:</b> When the property is just a simple string value, then
            no binding is necessary, just the value is placed as an attribute
            eg <i>rowHeight="22"</i>. Notice that boolean attributes are defaulted
            to 'true' IF they attribute is provided WITHOUT any value. If the attribute
            is not provided, it is taken as false.
        </li>
        <li><b>Grid API via IDs:</b> The grid in the example is created with an id
            by marking it with <i>#agGrid</i>. This in turn turns into a variable
            which can be used to access the grid's controller. The buttons
            Grid API and Column API buttons use this variable to access the grids
            API (the API's are attributes on the controller).
        </li>
        <li><b>Changing Properties:</b> When a property changes value, AngularJS
            automatically passes the new value onto the grid. This is used in
            the following locations:<br/>
            a) The 'quickFilter' on the top right updates the quick filter of
            the grid.
            b) The 'Show Tool Panel' checkbox has it's value bound to the 'showToolPanel'
            property of the grid.
            c) The 'Refresh Data' generates new data for the grid and updates the
            <i>rowData</i> property.
        </li>
    </ul>

    <p>
        Notice that the grid has it's properties marked as <b>immutable</b>. Hence for
        object properties, the object reference must change for the grid to take impact.
        For example, <i>rowData</i> must be a new list of data for the grid to be
        informed to redraw.
    </p>

    <p>
        The example has ag-Grid configured through the template in the following ways:
    </p>

    <pre><span class="codeComment">// notice the grid has an id called agGrid, which can be used to call the API</span>
&lt;ag-grid-ng2 #agGrid style="width: 100%; height: 350px;" class="ag-fresh"

    <span class="codeComment">// items bound to properties on the controller</span>
    [gridOptions]="gridOptions"
    [columnDefs]="columnDefs"
    [showToolPanel]="showToolPanel"
    [rowData]="rowData"

    <span class="codeComment">// boolean values 'turned on'</span>
    enableColResize
    enableSorting
    enableFilter

    <span class="codeComment">// simple values, not bound</span>
    rowHeight="22"
    rowSelection="multiple"

    <span class="codeComment">// event callbacks</span>
    (modelUpdated)="onModelUpdated()"
    (cellClicked)="onCellClicked($event)"
    (cellDoubleClicked)="onCellDoubleClicked($event)">

&lt;/ag-grid-ng2></pre>

    <p>
        The above is all you need to get started using ag-Grid in a React application. Now would
        be a good time to try it in a simple app and get some data displaying and practice with
        some of the grid settings before moving onto the advanced features of cellRendering
        and custom filtering.
    </p>

    <h2>Cell Rendering & Cell Editing using Angular 2</h2>

    <p>
        It is possible to build
        <a href="../javascript-grid-cell-rendering/#ng2CellRendering">cellRenders</a>,
        <a href="../javascript-grid-cell-editing/#ng2CellEditing">cellEditors</a> and
        <a href="../javascript-grid-filtering/#ng2Filtering">filters</a> using Angular 2. Doing each of these
        is explained in the section on each.
    </p>

    <p>
        Although it is possible to use Angular 2 for your customisations of ag-Grid, it is not necessary. The grid
        will happily work with both Angular 2 and non-Angular 2 portions (eg cellRenderers in Angular 2 or normal JavaScript).
        If you do use Angular 2, be aware that you are adding an extra layer of indirection into ag-Grid. ag-Grid's
        internal framework is already highly tuned to work incredibly fast and does not require Angular 2 or anything
        else to make it faster. If you are looking for a lightning fast grid, even if you are using Angular 2 and
        the ag-grid-ng2 component, consider using plain ag-Grid Components (as explained on the pages for
        rendering etc) inside ag-Grid instead of creating Angular 2 counterparts.
    </p>

    <note>
        <p>
            We here at ag-Grid owe a debt of thanks to Neal Borelli @ Thermo Fisher Scientific who provided a fully
            working implementation for us to use as a basis for our initial Angular 2 "dynamic cell" offering.
            Neal's assistance was a big help in being able to get something out much faster than we would have otherwise
            - thanks Neal!
        </p>
    </note>

    <h2>Known Issues</h2>

    <p>
        <b>"Attempt to use a dehydrated detector"</b>
    </p>

    <p>
        If you are getting the above error, then check out <a
            href="https://www.ag-grid.com/forum/showthread.php?tid=3537">this post</a>
        where jose_DS shines some light on the issue.
    </p>

    <h2>Next Steps...</h2>

    <p>
        Now you can go to <a href="../javascript-grid-interfacing-overview/index.php">interfacing</a>
        to learn about accessing all the features of the grid.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php'; ?>
