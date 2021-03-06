<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeyboards; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link inline rel="stylesheet" href="../dist/bootstrap/css/bootstrap.css">

    <link inline rel="stylesheet" href="../style.css">
    <link inline rel="stylesheet" href="../documentation-main/documentation.css">

    <link rel="shortcut icon" href="https://www.ag-grid.com/favicon.ico" />

</head>

<?php
$version = 'latest';

$rootFolder;
if (strcmp($version , 'latest') == 0) {
    $rootFolder = '/';
} else {
    $rootFolder = '/archive/'.$version.'/';
}
?>

<body ng-app="documentation">

<?php if ($version=='latest') {
    $navKey = "documentation";
    include '../includes/navbar.php';
} else { ?>
    <nav class="navbar-inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-12 top-header big-text">
                        <span class="top-button-wrapper">
                            <a class="top-button" href="<?php print($rootFolder) ?>"> <i class="fa fa-users"></i> ag-Grid Archive Documentation <?php print($version) ?></a>
                        </span>
                </div>
            </div>

        </div>
    </nav>
<?php } ?>

<?php $headerTitle = "Documentation"; include '../includes/headerRow.php'; ?>


    <div class="container" style="margin-top: 20px">

        <div class="row">

            <div class="col-sm-2">


                <h4>
                    The Basics
                </h4>

                <?php if ($key == "Getting Started") { ?>
                    <span class="sidebarLinkSelected">Getting Started</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-getting-started/index.php">Getting Started</a>
                <?php } ?>

                <?php if ($key == "Getting Started Javascript") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/javascript_small.png" width="20px"> Javascript</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-javascript-data-grid/index.php"><img inline src="/images/javascript_small.png" width="20px"> Javascript</a>
                <?php } ?>

                <?php if ($key == "Getting Started React") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/react_small.png" width="20px"> React</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-react-data-grid/index.php"><img inline src="/images/react_small.png" width="20px"> React</a>
                <?php } ?>

                <?php if ($key == "Getting Started ng1") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/angularjs_small.png" width="20px"> Angular 1</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-angularjs-data-grid/index.php"><img inline src="/images/angularjs_small.png" width="20px"> Angular 1</a>
                <?php } ?>

                <?php if ($key == "Getting Started ng2") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/angular2_small.png" width="20px"> Angular 2</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-angular-2-data-grid/index.php"><img inline src="/images/angular2_small.png"width="20px"> Angular 2</a>
                <?php } ?>

                <?php if ($key == "Getting Started Web Components") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/webComponents_small.png" width="20px"> Web Components</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-web-component-data-grid/index.php"><img inline src="/images/webComponents_small.png" width="20px"> Web Components</a>
                <?php } ?>

                <?php if ($key == "Width & Height") { ?>
                    <span class="sidebarLinkSelected">Width & Height</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-width-and-height/index.php">Width & Height</a>
                <?php } ?>

                <h4>
                    Interfacing
                </h4>

                <?php if ($key == "Interfacing Overview") { ?>
                    <span class="sidebarLinkSelected">Overview</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-interfacing-overview/index.php">Overview</a>
                <?php } ?>

                <?php if ($key == "Properties") { ?>
                    <span class="sidebarLinkSelected">Properties</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-properties/index.php">Properties</a>
                <?php } ?>

                <?php if ($key == "Column Definitions") { ?>
                    <span class="sidebarLinkSelected">Columns</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-column-definitions/index.php">Columns</a>
                <?php } ?>

                <?php if ($key == "Events") { ?>
                    <span class="sidebarLinkSelected">Events</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-events/index.php">Events</a>
                <?php } ?>

                <?php if ($key == "Callbacks") { ?>
                    <span class="sidebarLinkSelected">Callbacks</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-callbacks/index.php">Callbacks</a>
                <?php } ?>

                <?php if ($key == "Grid API") { ?>
                    <span class="sidebarLinkSelected">Grid API</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-api/index.php">Grid API</a>
                <?php } ?>

                <?php if ($key == "Column API") { ?>
                    <span class="sidebarLinkSelected">Column API</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-column-api/index.php">Column API</a>
                <?php } ?>

                <h4>
                    Core Features
                </h4>

                <?php if ($key == "Sorting") { ?>
                    <span class="sidebarLinkSelected">Sorting</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-sorting/index.php">Sorting</a>
                <?php } ?>

                <?php if ($key == "Filtering") { ?>
                    <span class="sidebarLinkSelected">Filtering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-filtering/index.php">Filtering</a>
                <?php } ?>

                <?php if ($key == "Selection") { ?>
                    <span class="sidebarLinkSelected">Selection</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-selection/index.php">Selection</a>
                <?php } ?>

                <?php if ($key == "Resizing") { ?>
                    <span class="sidebarLinkSelected">Resizing</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-resizing/index.php">Resizing</a>
                <?php } ?>

                <?php if ($key == "Pinning") { ?>
                    <span class="sidebarLinkSelected">Pinning</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-pinning/index.php">Pinning</a>
                <?php } ?>

                <?php if ($key == "Grouping Columns") { ?>
                    <span class="sidebarLinkSelected">Grouping Columns</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-grouping-headers/index.php">Grouping Columns</a>
                <?php } ?>

                <?php if ($key == "Tree Data") { ?>
                    <span class="sidebarLinkSelected">Tree Data</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-tree/index.php">Tree Data</a>
                <?php } ?>

                <?php if ($key == "Row Height") { ?>
                    <span class="sidebarLinkSelected">Row Height</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-row-height/index.php">Row Height</a>
                <?php } ?>

                <?php if ($key == "Floating") { ?>
                    <span class="sidebarLinkSelected">Floating Rows</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-floating/index.php">Floating Rows</a>
                <?php } ?>

                <?php if ($key == "Value Getters") { ?>
                    <span class="sidebarLinkSelected">Value Getters</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-value-getters/index.php">Value Getters</a>
                <?php } ?>

                <?php if ($key == "Cell Expressions") { ?>
                    <span class="sidebarLinkSelected">Cell Expressions</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-expressions/index.php">Cell Expressions</a>
                <?php } ?>

                <?php if ($key == "Cell Styling") { ?>
                    <span class="sidebarLinkSelected">Cell Styling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-styling/index.php">Cell Styling</a>
                <?php } ?>

                <?php if ($key == "Cell Rendering") { ?>
                    <span class="sidebarLinkSelected">Cell Rendering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-rendering/index.php">Cell Rendering</a>
                <?php } ?>

                <?php if ($key == "Cell Editing") { ?>
                    <span class="sidebarLinkSelected">Cell Editing</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-editing/index.php">Cell Editing</a>
                <?php } ?>

                <?php if ($key == "Cell Templates") { ?>
                    <span class="sidebarLinkSelected">Cell Templates</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-template/index.php">Cell Templates</a>
                <?php } ?>

                <?php if ($key == "Context") { ?>
                    <span class="sidebarLinkSelected">Context</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-context/index.php">Context</a>
                <?php } ?>

                <?php if ($key == "InsertRemove") { ?>
                    <span class="sidebarLinkSelected">Insert & Remove</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-insert-remove/index.php">Insert & Remove</a>
                <?php } ?>

                <?php if ($key == "Refresh") { ?>
                    <span class="sidebarLinkSelected">Refresh</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-refresh/index.php">Refresh</a>
                <?php } ?>

                <?php if ($key == "Header Rendering") { ?>
                    <span class="sidebarLinkSelected">Header Templates<br/>&nbsp;& Rendering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-header-rendering/index.php">Header Templates<br/>&nbsp;& Rendering</a>
                <?php } ?>

                <?php if ($key == "Keyboard Navigation") { ?>
                    <span class="sidebarLinkSelected">Keyboard Navigation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-keyboard-navigation/index.php">Keyboard Navigation</a>
                <?php } ?>

                <?php if ($key == "Internationalisation") { ?>
                    <span class="sidebarLinkSelected">Internationalisation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-internationalisation/index.php">Internationalisation</a>
                <?php } ?>

                <?php if ($key == "Full Width") { ?>
                    <span class="sidebarLinkSelected">Full Width Rows<br/>&nbsp;& Master Detail</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-master-detail/index.php">Full Width Rows<br/>&nbsp;& Master Detail</a>
                <?php } ?>

                <?php if ($key == "Master / Slave") { ?>
                    <span class="sidebarLinkSelected">Master / Slave</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-master-slave/index.php">Master / Slave</a>
                <?php } ?>

                <?php if ($key == "Touch") { ?>
                    <span class="sidebarLinkSelected">Touch</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-touch/index.php">Touch</a>
                <?php } ?>

                <?php if ($key == "Row Model") { ?>
                    <span class="sidebarLinkSelected">Row Model</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-model/index.php">Row Model</a>
                <?php } ?>

                <?php if ($key == "Data Export") { ?>
                    <span class="sidebarLinkSelected">Data Export</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-export/index.php">Data Export</a>
                <?php } ?>

                <?php if ($key == "Styling") { ?>
                    <span class="sidebarLinkSelected">Layout & Styling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-styling/index.php">Layout & Styling</a>
                <?php } ?>

                <?php if ($key == "Fresh Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Fresh Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/fresh-theme.php">&nbsp;  Fresh Theme</a>
                <?php } ?>
                <?php if ($key == "Blue Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Blue Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/blue-theme.php">&nbsp;  Blue Theme</a>
                <?php } ?>
                <?php if ($key == "Dark Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Dark Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/dark-theme.php">&nbsp;  Dark Theme</a>
                <?php } ?>
                <?php if ($key == "Material Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Material Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/material-theme.php">&nbsp;  Material Theme</a>
                <?php } ?>
                <?php if ($key == "Bootstrap Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Bootstrap Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/bootstrap-theme.php">&nbsp;  Bootstrap Theme</a>
                <?php } ?>

                <?php if ($key == "Icons") { ?>
                    <span class="sidebarLinkSelected">Icons</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-icons/index.php">Icons</a>
                <?php } ?>

                <?php if ($key == "Overlays") { ?>
                    <span class="sidebarLinkSelected">Overlays</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-overlays/index.php">Overlays</a>
                <?php } ?>

                <?php if ($key == "For Print") { ?>
                    <span class="sidebarLinkSelected">For Print</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-for-print/index.php">For Print</a>
                <?php } ?>

                <h4>
                    Row Models
                </h4>

                <?php if ($key == "Row Models") { ?>
                    <span class="sidebarLinkSelected">Introduction</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-row-models/index.php">Introduction</a>
                <?php } ?>

                <?php if ($key == "Datasource") { ?>
                    <span class="sidebarLinkSelected">Datasource</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-datasource/index.php">Datasource</a>
                <?php } ?>

                <?php if ($key == "Pagination") { ?>
                    <span class="sidebarLinkSelected">Pagination</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-pagination/index.php">Pagination</a>
                <?php } ?>

                <?php if ($key == "Virtual Paging / Infinite Scrolling") { ?>
                    <span class="sidebarLinkSelected">Virtual Paging<br/>&nbsp;& Infinite Scrolling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-virtual-paging/index.php">Virtual Paging<br/>&nbsp;& Infinite Scrolling</a>
                <?php } ?>

                <h4>
                    Enterprise Features
                </h4>

                <?php if ($key == "Viewport") { ?>
                    <span class="sidebarLinkSelected">Viewport</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-viewport/index.php">Viewport</a>
                <?php } ?>

                <?php if ($key == "Data Functions") { ?>
                    <span class="sidebarLinkSelected">Data Functions</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-data-functions/index.php">Data Functions</a>
                <?php } ?>

                <?php if ($key == "Grouping") { ?>
                    <span class="sidebarLinkSelected">&nbsp; Grouping Rows</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-grouping/index.php">&nbsp; Grouping Rows</a>
                <?php } ?>

                <?php if ($key == "Aggregation") { ?>
                    <span class="sidebarLinkSelected">&nbsp; Aggregation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-aggregation/index.php">&nbsp; Aggregation</a>
                <?php } ?>

                <?php if ($key == "Pivoting") { ?>
                    <span class="sidebarLinkSelected">&nbsp; Pivoting</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-pivoting/index.php">&nbsp; Pivoting</a>
                <?php } ?>

                <?php if ($key == "Tool Panel") { ?>
                    <span class="sidebarLinkSelected">Tool Panel</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-tool-panel/index.php">Tool Panel</a>
                <?php } ?>

                <?php if ($key == "Clipboard") { ?>
                    <span class="sidebarLinkSelected">Clipboard</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-clipboard/index.php">Clipboard</a>
                <?php } ?>

                <?php if ($key == "Column Menu") { ?>
                    <span class="sidebarLinkSelected">Column Menu</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-column-menu/index.php">Column Menu</a>
                <?php } ?>

                <?php if ($key == "Context Menu") { ?>
                    <span class="sidebarLinkSelected">Context Menu</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-context-menu/index.php">Context Menu</a>
                <?php } ?>

                <?php if ($key == "Range Selection") { ?>
                    <span class="sidebarLinkSelected">Range Selection</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-range-selection/index.php">Range Selection</a>
                <?php } ?>

                <?php if ($key == "Status Bar") { ?>
                    <span class="sidebarLinkSelected">Status Bar</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-status-bar/index.php">Status Bar</a>
                <?php } ?>

                <?php if ($key == "Set Filtering") { ?>
                    <span class="sidebarLinkSelected">Set Filtering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-set-filtering/index.php">Set Filtering</a>
                <?php } ?>

                <?php if ($key == "License Key") { ?>
                    <span class="sidebarLinkSelected">Set License Key</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-set-license/index.php">Set License Key</a>
                <?php } ?>

                <h4>
                    Examples
                </h4>

                <?php if ($key == "Styled Report") { ?>
                    <span class="sidebarLinkSelected">Styled Report</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>example-account-report/index.php">Styled Report</a>
                <?php } ?>

                <?php if ($key == "File Browser") { ?>
                    <span class="sidebarLinkSelected">File Browser</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>example-file-browser/index.php">File Browser</a>
                <?php } ?>

                <?php if ($key == "Expressions and Context") { ?>
                    <span class="sidebarLinkSelected">Expressions and Context</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>example-expressions-and-context/index.php">Expressions and Context</a>
                <?php } ?>

                <h4>
                    Tutorials
                </h4>

                <?php if ($key == "Intermediate Tutorial") { ?>
                    <span class="sidebarLinkSelected">Intermediate</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>ag-grid-tutorials/index.php">Intermediate</a>
                <?php } ?>

                <?php if ($version=='latest') { ?>
                    <h4>
                        Misc
                    </h4>

                    <?php if ($key == "Change Log") { ?>
                        <span class="sidebarLinkSelected">Change Log</span>
                    <?php } else { ?>
                        <a class="sidebarLink" href="<?php print($rootFolder) ?>change-log/changeLogIndex.php">Change Log</a>
                    <?php } ?>
                    <?php if ($key == "Roadmap") { ?>
                        <span class="sidebarLinkSelected">Feature Roadmap</span>
                    <?php } else { ?>
                        <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-roadmap/index.php">Feature Roadmap</a>
                    <?php } ?>
                    <a class="sidebarLink" href="/archive/">Archive Docs</a>
                <?php } ?>

            </div>

            <div class="col-sm-10 blog-main">