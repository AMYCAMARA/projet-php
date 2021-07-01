

<style>

.card-subtitle {
    margin-top: -0.25rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}
.card-link + .card-link {
    margin-left: 1rem;
}

.card-header {
    padding: 0.5rem 1rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
    padding: 0.5rem 1rem;
    background-color: rgba(0, 0, 0, 0.03);
    border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
    margin-right: -0.5rem;
    margin-bottom: -0.5rem;
    margin-left: -0.5rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.5rem;
    margin-left: -0.5rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
    width: 100%;
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-group > .card {
    margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
    .card-group {
        display: flex;
        flex-flow: row wrap;
    }
    .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }
    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-top,
    .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-bottom,
    .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-top,
    .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-bottom,
    .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem 1.25rem;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .accordion-button {
        transition: none;
    }
}
.accordion-button:not(.collapsed) {
    color: #0c63e4;
    background-color: #e7f1ff;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}
.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transform: rotate(-180deg);
}
.accordion-button::after {
    flex-shrink: 0;
    width: 1.25rem;
    height: 1.25rem;
    margin-left: auto;
    content: "";
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-size: 1.25rem;
    transition: transform 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .accordion-button::after {
        transition: none;
    }
}
.accordion-button:hover {
    z-index: 2;
}
.accordion-button:focus {
    z-index: 3;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.accordion-header {
    margin-bottom: 0;
}

.accordion-item {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}
.accordion-item:first-of-type {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.accordion-item:first-of-type .accordion-button {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}
.accordion-item:not(:first-of-type) {
    border-top: 0;
}
.accordion-item:last-of-type {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.accordion-item:last-of-type .accordion-button.collapsed {
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px);
}
.accordion-item:last-of-type .accordion-collapse {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.accordion-body {
    padding: 1rem 1.25rem;
}

.accordion-flush .accordion-collapse {
    border-width: 0;
}
.accordion-flush .accordion-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
    border-top: 0;
}
.accordion-flush .accordion-item:last-child {
    border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button {
    border-radius: 0;
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0 0;
    margin-bottom: 1rem;
    list-style: none;
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
    float: left;
    padding-right: 0.5rem;
    color: #6c757d;
    content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
    color: #6c757d;
}

.pagination, .dataTable-pagination ul {
    display: flex;
    padding-left: 0;
    list-style: none;
}

.page-link, .dataTable-pagination a {
    position: relative;
    display: block;
    color: #0d6efd;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #dee2e6;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .page-link, .dataTable-pagination a {
        transition: none;
    }
}
.page-link:hover, .dataTable-pagination a:hover {
    z-index: 2;
    color: #0a58ca;
    background-color: #e9ecef;
    border-color: #dee2e6;
}
.page-link:focus, .dataTable-pagination a:focus {
    z-index: 3;
    color: #0a58ca;
    background-color: #e9ecef;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.page-item:not(:first-child) .page-link, .page-item:not(:first-child) .dataTable-pagination a, .dataTable-pagination .page-item:not(:first-child) a, .dataTable-pagination li:not(:first-child) .page-link, .dataTable-pagination li:not(:first-child) a {
    margin-left: -1px;
}
.page-item.active .page-link, .page-item.active .dataTable-pagination a, .dataTable-pagination .page-item.active a, .dataTable-pagination li.active .page-link, .dataTable-pagination li.active a {
    z-index: 3;
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}
.page-item.disabled .page-link, .page-item.disabled .dataTable-pagination a, .dataTable-pagination .page-item.disabled a, .dataTable-pagination li.disabled .page-link, .dataTable-pagination li.disabled a {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
}

.page-link, .dataTable-pagination a {
    padding: 0.375rem 0.75rem;
}

.page-item:first-child .page-link, .page-item:first-child .dataTable-pagination a, .dataTable-pagination .page-item:first-child a, .dataTable-pagination li:first-child .page-link, .dataTable-pagination li:first-child a {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link, .page-item:last-child .dataTable-pagination a, .dataTable-pagination .page-item:last-child a, .dataTable-pagination li:last-child .page-link, .dataTable-pagination li:last-child a {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

.pagination-lg .page-link, .pagination-lg .dataTable-pagination a, .dataTable-pagination .pagination-lg a {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
}
.pagination-lg .page-item:first-child .page-link, .pagination-lg .page-item:first-child .dataTable-pagination a, .dataTable-pagination .pagination-lg .page-item:first-child a, .pagination-lg .dataTable-pagination li:first-child .page-link, .pagination-lg .dataTable-pagination li:first-child a, .dataTable-pagination .pagination-lg li:first-child .page-link, .dataTable-pagination .pagination-lg li:first-child a {
    border-top-left-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link, .pagination-lg .page-item:last-child .dataTable-pagination a, .dataTable-pagination .pagination-lg .page-item:last-child a, .pagination-lg .dataTable-pagination li:last-child .page-link, .pagination-lg .dataTable-pagination li:last-child a, .dataTable-pagination .pagination-lg li:last-child .page-link, .dataTable-pagination .pagination-lg li:last-child a {
    border-top-right-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link, .pagination-sm .dataTable-pagination a, .dataTable-pagination .pagination-sm a {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
}
.pagination-sm .page-item:first-child .page-link, .pagination-sm .page-item:first-child .dataTable-pagination a, .dataTable-pagination .pagination-sm .page-item:first-child a, .pagination-sm .dataTable-pagination li:first-child .page-link, .pagination-sm .dataTable-pagination li:first-child a, .dataTable-pagination .pagination-sm li:first-child .page-link, .dataTable-pagination .pagination-sm li:first-child a {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link, .pagination-sm .page-item:last-child .dataTable-pagination a, .dataTable-pagination .pagination-sm .page-item:last-child a, .pagination-sm .dataTable-pagination li:last-child .page-link, .pagination-sm .dataTable-pagination li:last-child a, .dataTable-pagination .pagination-sm li:last-child .page-link, .dataTable-pagination .pagination-sm li:last-child a {
    border-top-right-radius: 0.2rem;
    border-bottom-right-radius: 0.2rem;
}

.badge {
    display: inline-block;
    padding: 0.35em 0.65em;
    font-size: 0.75em;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}
.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.alert {
    position: relative;
    padding: 1rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 3rem;
}
.alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: 1.25rem 1rem;
}

.alert-primary {
    color: #084298;
    background-color: #cfe2ff;
    border-color: #b6d4fe;
}
.alert-primary .alert-link {
    color: #06357a;
}

.alert-secondary {
    color: #41464b;
    background-color: #e2e3e5;
    border-color: #d3d6d8;
}
.alert-secondary .alert-link {
    color: #34383c;
}

.alert-success {
    color: #0f5132;
    background-color: #d1e7dd;
    border-color: #badbcc;
}
.alert-success .alert-link {
    color: #0c4128;
}

.alert-info {
    color: #055160;
    background-color: #cff4fc;
    border-color: #b6effb;
}
.alert-info .alert-link {
    color: #04414d;
}

.alert-warning {
    color: #664d03;
    background-color: #fff3cd;
    border-color: #ffecb5;
}
.alert-warning .alert-link {
    color: #523e02;
}

.alert-danger {
    color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
}
.alert-danger .alert-link {
    color: #6a1a21;
}

.alert-light {
    color: #636464;
    background-color: #fefefe;
    border-color: #fdfdfe;
}
.alert-light .alert-link {
    color: #4f5050;
}

.alert-dark {
    color: #141619;
    background-color: #d3d3d4;
    border-color: #bcbebf;
}
.alert-dark .alert-link {
    color: #101214;
}

@-webkit-keyframes progress-bar-stripes {
    0% {
        background-position-x: 1rem;
    }
}

@keyframes progress-bar-stripes {
    0% {
        background-position-x: 1rem;
    }
}
.progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #0d6efd;
    transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

.progress-bar-animated {
    -webkit-animation: 1s linear infinite progress-bar-stripes;
    animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none;
    }
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: 0.25rem;
}

.list-group-numbered {
    list-style-type: none;
    counter-reset: section;
}
.list-group-numbered > li::before {
    content: counters(section, ".") ". ";
    counter-increment: section;
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa;
}
.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.5rem 1rem;
    color: #212529;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;
}
.list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}
.list-group-item + .list-group-item {
    border-top-width: 0;
}
.list-group-item + .list-group-item.active {
    margin-top: -1px;
    border-top-width: 1px;
}

.list-group-horizontal {
    flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
    margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }
    .list-group-horizontal-sm > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-sm > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-sm > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-sm > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }
    .list-group-horizontal-md > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-md > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-md > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-md > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }
    .list-group-horizontal-lg > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-lg > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-lg > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-lg > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }
    .list-group-horizontal-xl > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xl > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xl > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xl > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 1400px) {
    .list-group-horizontal-xxl {
        flex-direction: row;
    }
    .list-group-horizontal-xxl > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xxl > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xxl > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
.list-group-flush {
    border-radius: 0;
}
.list-group-flush > .list-group-item {
    border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
    border-bottom-width: 0;
}

.list-group-item-primary {
    color: #084298;
    background-color: #cfe2ff;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #084298;
    background-color: #bacbe6;
}
.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #084298;
    border-color: #084298;
}

.list-group-item-secondary {
    color: #41464b;
    background-color: #e2e3e5;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #41464b;
    background-color: #cbccce;
}
.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #41464b;
    border-color: #41464b;
}

.list-group-item-success {
    color: #0f5132;
    background-color: #d1e7dd;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #0f5132;
    background-color: #bcd0c7;
}
.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #0f5132;
    border-color: #0f5132;
}

.list-group-item-info {
    color: #055160;
    background-color: #cff4fc;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #055160;
    background-color: #badce3;
}
.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #055160;
    border-color: #055160;
}

.list-group-item-warning {
    color: #664d03;
    background-color: #fff3cd;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #664d03;
    background-color: #e6dbb9;
}
.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #664d03;
    border-color: #664d03;
}

.list-group-item-danger {
    color: #842029;
    background-color: #f8d7da;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #842029;
    background-color: #dfc2c4;
}
.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #842029;
    border-color: #842029;
}

.list-group-item-light {
    color: #636464;
    background-color: #fefefe;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #636464;
    background-color: #e5e5e5;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #636464;
    border-color: #636464;
}

.list-group-item-dark {
    color: #141619;
    background-color: #d3d3d4;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #141619;
    background-color: #bebebf;
}
.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #141619;
    border-color: #141619;
}

.btn-close {
    box-sizing: content-box;
    width: 1em;
    height: 1em;
    padding: 0.25em 0.25em;
    color: #000;
    background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
    border: 0;
    border-radius: 0.25rem;
    opacity: 0.5;
}
.btn-close:hover {
    color: #000;
    text-decoration: none;
    opacity: 0.75;
}
.btn-close:focus {
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    opacity: 1;
}
.btn-close:disabled, .btn-close.disabled {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    opacity: 0.25;
}

.btn-close-white {
    filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
    width: 350px;
    max-width: 100%;
    font-size: 0.875rem;
    pointer-events: auto;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}
.toast:not(.showing):not(.show) {
    opacity: 0;
}
.toast.hide {
    display: none;
}

.toast-container {
    width: -webkit-max-content;
    width: -moz-max-content;
    width: max-content;
    max-width: 100%;
    pointer-events: none;
}
.toast-container > :not(:last-child) {
    margin-bottom: 0.75rem;
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.5rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}
.toast-header .btn-close {
    margin-right: -0.375rem;
    margin-left: 0.75rem;
}

.toast-body {
    padding: 0.75rem;
    word-wrap: break-word;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1060;
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}
.modal.show .modal-dialog {
    transform: none;
}
.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}

.modal-dialog-scrollable {
    height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: 0.5;
}

.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem;
}

.modal-footer {
    display: flex;
    flex-wrap: wrap;
    flex-shrink: 0;
    align-items: center;
    justify-content: flex-end;
    padding: 0.75rem;
    border-top: 1px solid #dee2e6;
    border-bottom-right-radius: calc(0.3rem - 1px);
    border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
    margin: 0.25rem;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }

    .modal-dialog-scrollable {
        height: calc(100% - 3.5rem);
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }

    .modal-sm {
        max-width: 300px;
    }
}
@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        max-width: 800px;
    }
}
@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}
.modal-fullscreen {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
}
.modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
}
.modal-fullscreen .modal-header {
    border-radius: 0;
}
.modal-fullscreen .modal-body {
    overflow-y: auto;
}
.modal-fullscreen .modal-footer {
    border-radius: 0;
}

@media (max-width: 575.98px) {
    .modal-fullscreen-sm-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-sm-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-sm-down .modal-header {
        border-radius: 0;
    }
    .modal-fullscreen-sm-down .modal-body {
        overflow-y: auto;
    }
    .modal-fullscreen-sm-down .modal-footer {
        border-radius: 0;
    }
}
@media (max-width: 767.98px) {
    .modal-fullscreen-md-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-md-down .modal-header {
        border-radius: 0;
    }
    .modal-fullscreen-md-down .modal-body {
        overflow-y: auto;
    }
    .modal-fullscreen-md-down .modal-footer {
        border-radius: 0;
    }
}
@media (max-width: 991.98px) {
    .modal-fullscreen-lg-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-lg-down .modal-header {
        border-radius: 0;
    }
    .modal-fullscreen-lg-down .modal-body {
        overflow-y: auto;
    }
    .modal-fullscreen-lg-down .modal-footer {
        border-radius: 0;
    }
}
@media (max-width: 1199.98px) {
    .modal-fullscreen-xl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-xl-down .modal-header {
        border-radius: 0;
    }
    .modal-fullscreen-xl-down .modal-body {
        overflow-y: auto;
    }
    .modal-fullscreen-xl-down .modal-footer {
        border-radius: 0;
    }
}
@media (max-width: 1399.98px) {
    .modal-fullscreen-xxl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xxl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-xxl-down .modal-header {
        border-radius: 0;
    }
    .modal-fullscreen-xxl-down .modal-body {
        overflow-y: auto;
    }
    .modal-fullscreen-xxl-down .modal-footer {
        border-radius: 0;
    }
}
.tooltip {
    position: absolute;
    z-index: 1080;
    display: block;
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}
.tooltip.show {
    opacity: 0.9;
}
.tooltip .tooltip-arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}
.tooltip .tooltip-arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^=top] {
    padding: 0.4rem 0;
}
.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
    bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
    top: -1px;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^=right] {
    padding: 0 0.4rem;
}
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
    right: -1px;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^=bottom] {
    padding: 0.4rem 0;
}
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
    top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
    bottom: -1px;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^=left] {
    padding: 0 0.4rem;
}
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
    left: -1px;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem;
}

.popover {
    position: absolute;
    top: 0;
    left: 0 /* rtl:ignore */;
    z-index: 1070;
    display: block;
    max-width: 276px;
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
}
.popover .popover-arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
    bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff;
}

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
    left: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff;
}

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
    top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f0f0f0;
}

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
    right: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff;
}

.popover-header {
    padding: 0.5rem 1rem;
    margin-bottom: 0;
    font-size: 1rem;
    background-color: #f0f0f0;
    border-bottom: 1px solid #d8d8d8;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
    display: none;
}

.popover-body {
    padding: 1rem 1rem;
    color: #212529;
}

.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
    transform: translateX(-100%);
}

/* rtl:end:ignore */
.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
    z-index: 1;
    opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: none;
    border: 0;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;
}

/* rtl:options: {
"autoRename": true,
"stringMap":[ {
"name"    : "prev-next",
"search"  : "prev",
"replace" : "next"
} ]
} */
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 0;
    margin-right: 15%;
    margin-bottom: 1rem;
    margin-left: 15%;
    list-style: none;
}
.carousel-indicators [data-bs-target] {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    padding: 0;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-indicators [data-bs-target] {
        transition: none;
    }
}
.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 1.25rem;
    left: 15%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
    filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
    background-color: #000;
}
.carousel-dark .carousel-caption {
    color: #000;
}

@-webkit-keyframes spinner-border {
    to {
        transform: rotate(360deg) /* rtl:ignore */;
    }
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg) /* rtl:ignore */;
    }
}
.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: -0.125em;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: 0.75s linear infinite spinner-border;
    animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
    0% {
        transform: scale(0);
    }
    50% {
        opacity: 1;
        transform: none;
    }
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }
    50% {
        opacity: 1;
        transform: none;
    }
}
.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: -0.125em;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: 0.75s linear infinite spinner-grow;
    animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
        -webkit-animation-duration: 1.5s;
        animation-duration: 1.5s;
    }
}
.offcanvas {
    position: fixed;
    bottom: 0;
    z-index: 1050;
    display: flex;
    flex-direction: column;
    max-width: 100%;
    visibility: hidden;
    background-color: #fff;
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .offcanvas {
        transition: none;
    }
}

.offcanvas-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 1rem;
}
.offcanvas-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
}

.offcanvas-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.offcanvas-body {
    flex-grow: 1;
    padding: 1rem 1rem;
    overflow-y: auto;
}

.offcanvas-start {
    top: 0;
    left: 0;
    width: 400px;
    border-right: 1px solid rgba(0, 0, 0, 0.2);
    transform: translateX(-100%);
}

.offcanvas-end {
    top: 0;
    right: 0;
    width: 400px;
    border-left: 1px solid rgba(0, 0, 0, 0.2);
    transform: translateX(100%);
}

.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: 30vh;
    max-height: 100%;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    transform: translateY(-100%);
}

.offcanvas-bottom {
    right: 0;
    left: 0;
    height: 30vh;
    max-height: 100%;
    border-top: 1px solid rgba(0, 0, 0, 0.2);
    transform: translateY(100%);
}

.offcanvas.show {
    transform: none;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.link-primary {
    color: #0d6efd;
}
.link-primary:hover, .link-primary:focus {
    color: #0a58ca;
}

.link-secondary {
    color: #6c757d;
}
.link-secondary:hover, .link-secondary:focus {
    color: #565e64;
}

.link-success {
    color: #198754;
}
.link-success:hover, .link-success:focus {
    color: #146c43;
}

.link-info {
    color: #0dcaf0;
}
.link-info:hover, .link-info:focus {
    color: #3dd5f3;
}

.link-warning {
    color: #ffc107;
}
.link-warning:hover, .link-warning:focus {
    color: #ffcd39;
}

.link-danger {
    color: #dc3545;
}
.link-danger:hover, .link-danger:focus {
    color: #b02a37;
}

.link-light {
    color: #f8f9fa;
}
.link-light:hover, .link-light:focus {
    color: #f9fafb;
}

.link-dark {
    color: #212529;
}
.link-dark:hover, .link-dark:focus {
    color: #1a1e21;
}

.ratio {
    position: relative;
    width: 100%;
}
.ratio::before {
    display: block;
    padding-top: var(--bs-aspect-ratio);
    content: "";
}
.ratio > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.ratio-1x1 {
    --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
    --bs-aspect-ratio: calc(3 / 4 * 100%);
}

.ratio-16x9 {
    --bs-aspect-ratio: calc(9 / 16 * 100%);
}

.ratio-21x9 {
    --bs-aspect-ratio: calc(9 / 21 * 100%);
}

.fixed-top, .sb-nav-fixed #layoutSidenav #layoutSidenav_nav, .sb-nav-fixed .sb-topnav {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
}

@media (min-width: 576px) {
    .sticky-sm-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}
@media (min-width: 768px) {
    .sticky-md-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}
@media (min-width: 992px) {
    .sticky-lg-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}
@media (min-width: 1200px) {
    .sticky-xl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}
@media (min-width: 1400px) {
    .sticky-xxl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}
.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important;
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    content: "";
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.float-start {
    float: left !important;
}

.float-end {
    float: right !important;
}

.float-none {
    float: none !important;
}

.overflow-auto {
    overflow: auto !important;
}

.overflow-hidden {
    overflow: hidden !important;
}

.overflow-visible {
    overflow: visible !important;
}

.overflow-scroll {
    overflow: scroll !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-grid {
    display: grid !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

.d-none {
    display: none !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: sticky !important;
}

.top-0 {
    top: 0 !important;
}

.top-50 {
    top: 50% !important;
}

.top-100 {
    top: 100% !important;
}

.bottom-0 {
    bottom: 0 !important;
}

.bottom-50 {
    bottom: 50% !important;
}

.bottom-100 {
    bottom: 100% !important;
}

.start-0 {
    left: 0 !important;
}

.start-50 {
    left: 50% !important;
}

.start-100 {
    left: 100% !important;
}

.end-0 {
    right: 0 !important;
}

.end-50 {
    right: 50% !important;
}

.end-100 {
    right: 100% !important;
}

.translate-middle {
    transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
    transform: translateX(-50%) !important;
}

.translate-middle-y {
    transform: translateY(-50%) !important;
}

.border {
    border: 1px solid #dee2e6 !important;
}

.border-0 {
    border: 0 !important;
}

.border-top {
    border-top: 1px solid #dee2e6 !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-end {
    border-right: 1px solid #dee2e6 !important;
}

.border-end-0 {
    border-right: 0 !important;
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-start {
    border-left: 1px solid #dee2e6 !important;
}

.border-start-0 {
    border-left: 0 !important;
}

.border-primary {
    border-color: #0d6efd !important;
}

.border-secondary {
    border-color: #6c757d !important;
}

.border-success {
    border-color: #198754 !important;
}

.border-info {
    border-color: #0dcaf0 !important;
}

.border-warning {
    border-color: #ffc107 !important;
}

.border-danger {
    border-color: #dc3545 !important;
}

.border-light {
    border-color: #f8f9fa !important;
}

.border-dark {
    border-color: #212529 !important;
}

.border-white {
    border-color: #fff !important;
}

.border-1 {
    border-width: 1px !important;
}

.border-2 {
    border-width: 2px !important;
}

.border-3 {
    border-width: 3px !important;
}

.border-4 {
    border-width: 4px !important;
}

.border-5 {
    border-width: 5px !important;
}

.w-25 {
    width: 25% !important;
}

.w-50 {
    width: 50% !important;
}

.w-75 {
    width: 75% !important;
}

.w-100 {
    width: 100% !important;
}

.w-auto {
    width: auto !important;
}

.mw-100 {
    max-width: 100% !important;
}

.vw-100 {
    width: 100vw !important;
}

.min-vw-100 {
    min-width: 100vw !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-100 {
    height: 100% !important;
}

.h-auto {
    height: auto !important;
}

.mh-100 {
    max-height: 100% !important;
}

.vh-100 {
    height: 100vh !important;
}

.min-vh-100 {
    min-height: 100vh !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.gap-0 {
    gap: 0 !important;
}

.gap-1 {
    gap: 0.25rem !important;
}

.gap-2 {
    gap: 0.5rem !important;
}

.gap-3 {
    gap: 1rem !important;
}

.gap-4 {
    gap: 1.5rem !important;
}

.gap-5 {
    gap: 3rem !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.justify-content-evenly {
    justify-content: space-evenly !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

.order-first {
    order: -1 !important;
}

.order-0 {
    order: 0 !important;
}

.order-1 {
    order: 1 !important;
}

.order-2 {
    order: 2 !important;
}

.order-3 {
    order: 3 !important;
}

.order-4 {
    order: 4 !important;
}

.order-5 {
    order: 5 !important;
}

.order-last {
    order: 6 !important;
}

.m-0 {
    margin: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mx-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
}

.mx-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
}

.mx-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
}

.mx-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
}

.mx-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
}

.mx-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
}

.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important;
}

.my-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

.my-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
}

.my-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
}

.my-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
}

.my-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
}

.my-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
}

.my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
}

.mt-0 {
    margin-top: 0 !important;
}

.mt-1 {
    margin-top: 0.25rem !important;
}

.mt-2 {
    margin-top: 0.5rem !important;
}

.mt-3 {
    margin-top: 1rem !important;
}

.mt-4 {
    margin-top: 1.5rem !important;
}

.mt-5 {
    margin-top: 3rem !important;
}

.mt-auto {
    margin-top: auto !important;
}

.me-0 {
    margin-right: 0 !important;
}

.me-1 {
    margin-right: 0.25rem !important;
}

.me-2 {
    margin-right: 0.5rem !important;
}

.me-3 {
    margin-right: 1rem !important;
}

.me-4 {
    margin-right: 1.5rem !important;
}

.me-5 {
    margin-right: 3rem !important;
}

.me-auto {
    margin-right: auto !important;
}

.mb-0 {
    margin-bottom: 0 !important;
}

.mb-1 {
    margin-bottom: 0.25rem !important;
}

.mb-2 {
    margin-bottom: 0.5rem !important;
}

.mb-3 {
    margin-bottom: 1rem !important;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

.mb-auto {
    margin-bottom: auto !important;
}

.ms-0 {
    margin-left: 0 !important;
}

.ms-1 {
    margin-left: 0.25rem !important;
}

.ms-2 {
    margin-left: 0.5rem !important;
}

.ms-3 {
    margin-left: 1rem !important;
}

.ms-4 {
    margin-left: 1.5rem !important;
}

.ms-5 {
    margin-left: 3rem !important;
}

.ms-auto {
    margin-left: auto !important;
}

.p-0 {
    padding: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.px-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
}

.px-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
}

.px-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
}

.px-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
}

.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}

.px-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
}

.py-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}

.py-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
}

.py-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
}

.py-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
}

.py-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
}

.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}

.pt-0 {
    padding-top: 0 !important;
}

.pt-1 {
    padding-top: 0.25rem !important;
}

.pt-2 {
    padding-top: 0.5rem !important;
}

.pt-3 {
    padding-top: 1rem !important;
}

.pt-4 {
    padding-top: 1.5rem !important;
}

.pt-5 {
    padding-top: 3rem !important;
}

.pe-0 {
    padding-right: 0 !important;
}

.pe-1 {
    padding-right: 0.25rem !important;
}

.pe-2 {
    padding-right: 0.5rem !important;
}

.pe-3 {
    padding-right: 1rem !important;
}

.pe-4 {
    padding-right: 1.5rem !important;
}

.pe-5 {
    padding-right: 3rem !important;
}

.pb-0 {
    padding-bottom: 0 !important;
}

.pb-1 {
    padding-bottom: 0.25rem !important;
}

.pb-2 {
    padding-bottom: 0.5rem !important;
}

.pb-3 {
    padding-bottom: 1rem !important;
}

.pb-4 {
    padding-bottom: 1.5rem !important;
}

.pb-5 {
    padding-bottom: 3rem !important;
}

.ps-0 {
    padding-left: 0 !important;
}

.ps-1 {
    padding-left: 0.25rem !important;
}

.ps-2 {
    padding-left: 0.5rem !important;
}

.ps-3 {
    padding-left: 1rem !important;
}

.ps-4 {
    padding-left: 1.5rem !important;
}

.ps-5 {
    padding-left: 3rem !important;
}

.font-monospace {
    font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
    font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
    font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
    font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
    font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
    font-size: 1.25rem !important;
}

.fs-6 {
    font-size: 1rem !important;
}

.fst-italic {
    font-style: italic !important;
}

.fst-normal {
    font-style: normal !important;
}

.fw-light {
    font-weight: 300 !important;
}

.fw-lighter {
    font-weight: lighter !important;
}

.fw-normal {
    font-weight: 400 !important;
}

.fw-bold {
    font-weight: 700 !important;
}

.fw-bolder {
    font-weight: bolder !important;
}

.lh-1 {
    line-height: 1 !important;
}

.lh-sm {
    line-height: 1.25 !important;
}

.lh-base {
    line-height: 1.5 !important;
}

.lh-lg {
    line-height: 2 !important;
}

.text-start {
    text-align: left !important;
}

.text-end {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-decoration-underline {
    text-decoration: underline !important;
}

.text-decoration-line-through {
    text-decoration: line-through !important;
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.text-wrap {
    white-space: normal !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
    word-wrap: break-word !important;
    word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
    color: #0d6efd !important;
}

.text-secondary {
    color: #6c757d !important;
}

.text-success {
    color: #198754 !important;
}

.text-info {
    color: #0dcaf0 !important;
}

.text-warning {
    color: #ffc107 !important;
}

.text-danger {
    color: #dc3545 !important;
}

.text-light {
    color: #f8f9fa !important;
}

.text-dark {
    color: #212529 !important;
}

.text-white {
    color: #fff !important;
}

.text-body {
    color: #212529 !important;
}

.text-muted {
    color: #6c757d !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
    color: inherit !important;
}

.bg-primary {
    background-color: #0d6efd !important;
}

.bg-secondary {
    background-color: #6c757d !important;
}

.bg-success {
    background-color: #198754 !important;
}

.bg-info {
    background-color: #0dcaf0 !important;
}

.bg-warning {
    background-color: #ffc107 !important;
}

.bg-danger {
    background-color: #dc3545 !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.bg-dark {
    background-color: #212529 !important;
}

.bg-body {
    background-color: #fff !important;
}

.bg-white {
    background-color: #fff !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.bg-gradient {
    background-image: var(--bs-gradient) !important;
}

.user-select-all {
    -webkit-user-select: all !important;
    -moz-user-select: all !important;
    user-select: all !important;
}

.user-select-auto {
    -webkit-user-select: auto !important;
    -moz-user-select: auto !important;
    -ms-user-select: auto !important;
    user-select: auto !important;
}

.user-select-none {
    -webkit-user-select: none !important;
    -moz-user-select: none !important;
    -ms-user-select: none !important;
    user-select: none !important;
}

.pe-none {
    pointer-events: none !important;
}

.pe-auto {
    pointer-events: auto !important;
}

.rounded {
    border-radius: 0.25rem !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.rounded-1 {
    border-radius: 0.2rem !important;
}

.rounded-2 {
    border-radius: 0.25rem !important;
}

.rounded-3 {
    border-radius: 0.3rem !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: 50rem !important;
}

.rounded-top {
    border-top-left-radius: 0.25rem !important;
    border-top-right-radius: 0.25rem !important;
}

.rounded-end {
    border-top-right-radius: 0.25rem !important;
    border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
    border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important;
}

.rounded-start {
    border-bottom-left-radius: 0.25rem !important;
    border-top-left-radius: 0.25rem !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

@media (min-width: 576px) {
    .float-sm-start {
        float: left !important;
    }

    .float-sm-end {
        float: right !important;
    }

    .float-sm-none {
        float: none !important;
    }

    .d-sm-inline {
        display: inline !important;
    }

    .d-sm-inline-block {
        display: inline-block !important;
    }

    .d-sm-block {
        display: block !important;
    }

    .d-sm-grid {
        display: grid !important;
    }

    .d-sm-table {
        display: table !important;
    }

    .d-sm-table-row {
        display: table-row !important;
    }

    .d-sm-table-cell {
        display: table-cell !important;
    }

    .d-sm-flex {
        display: flex !important;
    }

    .d-sm-inline-flex {
        display: inline-flex !important;
    }

    .d-sm-none {
        display: none !important;
    }

    .flex-sm-fill {
        flex: 1 1 auto !important;
    }

    .flex-sm-row {
        flex-direction: row !important;
    }

    .flex-sm-column {
        flex-direction: column !important;
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .gap-sm-0 {
        gap: 0 !important;
    }

    .gap-sm-1 {
        gap: 0.25rem !important;
    }

    .gap-sm-2 {
        gap: 0.5rem !important;
    }

    .gap-sm-3 {
        gap: 1rem !important;
    }

    .gap-sm-4 {
        gap: 1.5rem !important;
    }

    .gap-sm-5 {
        gap: 3rem !important;
    }

    .justify-content-sm-start {
        justify-content: flex-start !important;
    }

    .justify-content-sm-end {
        justify-content: flex-end !important;
    }

    .justify-content-sm-center {
        justify-content: center !important;
    }

    .justify-content-sm-between {
        justify-content: space-between !important;
    }

    .justify-content-sm-around {
        justify-content: space-around !important;
    }

    .justify-content-sm-evenly {
        justify-content: space-evenly !important;
    }

    .align-items-sm-start {
        align-items: flex-start !important;
    }

    .align-items-sm-end {
        align-items: flex-end !important;
    }

    .align-items-sm-center {
        align-items: center !important;
    }

    .align-items-sm-baseline {
        align-items: baseline !important;
    }

    .align-items-sm-stretch {
        align-items: stretch !important;
    }

    .align-content-sm-start {
        align-content: flex-start !important;
    }

    .align-content-sm-end {
        align-content: flex-end !important;
    }

    .align-content-sm-center {
        align-content: center !important;
    }

    .align-content-sm-between {
        align-content: space-between !important;
    }

    .align-content-sm-around {
        align-content: space-around !important;
    }

    .align-content-sm-stretch {
        align-content: stretch !important;
    }

    .align-self-sm-auto {
        align-self: auto !important;
    }

    .align-self-sm-start {
        align-self: flex-start !important;
    }

    .align-self-sm-end {
        align-self: flex-end !important;
    }

    .align-self-sm-center {
        align-self: center !important;
    }

    .align-self-sm-baseline {
        align-self: baseline !important;
    }

    .align-self-sm-stretch {
        align-self: stretch !important;
    }

    .order-sm-first {
        order: -1 !important;
    }

    .order-sm-0 {
        order: 0 !important;
    }

    .order-sm-1 {
        order: 1 !important;
    }

    .order-sm-2 {
        order: 2 !important;
    }

    .order-sm-3 {
        order: 3 !important;
    }

    .order-sm-4 {
        order: 4 !important;
    }

    .order-sm-5 {
        order: 5 !important;
    }

    .order-sm-last {
        order: 6 !important;
    }

    .m-sm-0 {
        margin: 0 !important;
    }

    .m-sm-1 {
        margin: 0.25rem !important;
    }

    .m-sm-2 {
        margin: 0.5rem !important;
    }

    .m-sm-3 {
        margin: 1rem !important;
    }

    .m-sm-4 {
        margin: 1.5rem !important;
    }

    .m-sm-5 {
        margin: 3rem !important;
    }

    .m-sm-auto {
        margin: auto !important;
    }

    .mx-sm-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-sm-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }

    .mx-sm-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }

    .mx-sm-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }

    .mx-sm-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }

    .mx-sm-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }

    .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-sm-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .my-sm-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }

    .my-sm-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-sm-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .my-sm-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }

    .my-sm-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .mt-sm-0 {
        margin-top: 0 !important;
    }

    .mt-sm-1 {
        margin-top: 0.25rem !important;
    }

    .mt-sm-2 {
        margin-top: 0.5rem !important;
    }

    .mt-sm-3 {
        margin-top: 1rem !important;
    }

    .mt-sm-4 {
        margin-top: 1.5rem !important;
    }

    .mt-sm-5 {
        margin-top: 3rem !important;
    }

    .mt-sm-auto {
        margin-top: auto !important;
    }

    .me-sm-0 {
        margin-right: 0 !important;
    }

    .me-sm-1 {
        margin-right: 0.25rem !important;
    }

    .me-sm-2 {
        margin-right: 0.5rem !important;
    }

    .me-sm-3 {
        margin-right: 1rem !important;
    }

    .me-sm-4 {
        margin-right: 1.5rem !important;
    }

    .me-sm-5 {
        margin-right: 3rem !important;
    }

    .me-sm-auto {
        margin-right: auto !important;
    }

    .mb-sm-0 {
        margin-bottom: 0 !important;
    }

    .mb-sm-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-sm-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-sm-3 {
        margin-bottom: 1rem !important;
    }

    .mb-sm-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-sm-5 {
        margin-bottom: 3rem !important;
    }

    .mb-sm-auto {
        margin-bottom: auto !important;
    }

    .ms-sm-0 {
        margin-left: 0 !important;
    }

    .ms-sm-1 {
        margin-left: 0.25rem !important;
    }

    .ms-sm-2 {
        margin-left: 0.5rem !important;
    }

    .ms-sm-3 {
        margin-left: 1rem !important;
    }

    .ms-sm-4 {
        margin-left: 1.5rem !important;
    }

    .ms-sm-5 {
        margin-left: 3rem !important;
    }

    .ms-sm-auto {
        margin-left: auto !important;
    }

    .p-sm-0 {
        padding: 0 !important;
    }

    .p-sm-1 {
        padding: 0.25rem !important;
    }

    .p-sm-2 {
        padding: 0.5rem !important;
    }

    .p-sm-3 {
        padding: 1rem !important;
    }

    .p-sm-4 {
        padding: 1.5rem !important;
    }

    .p-sm-5 {
        padding: 3rem !important;
    }

    .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-sm-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    .px-sm-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-sm-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .px-sm-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .px-sm-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .py-sm-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    .py-sm-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .py-sm-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .py-sm-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .pt-sm-0 {
        padding-top: 0 !important;
    }

    .pt-sm-1 {
        padding-top: 0.25rem !important;
    }

    .pt-sm-2 {
        padding-top: 0.5rem !important;
    }

    .pt-sm-3 {
        padding-top: 1rem !important;
    }

    .pt-sm-4 {
        padding-top: 1.5rem !important;
    }

    .pt-sm-5 {
        padding-top: 3rem !important;
    }

    .pe-sm-0 {
        padding-right: 0 !important;
    }

    .pe-sm-1 {
        padding-right: 0.25rem !important;
    }

    .pe-sm-2 {
        padding-right: 0.5rem !important;
    }

    .pe-sm-3 {
        padding-right: 1rem !important;
    }

    .pe-sm-4 {
        padding-right: 1.5rem !important;
    }

    .pe-sm-5 {
        padding-right: 3rem !important;
    }

    .pb-sm-0 {
        padding-bottom: 0 !important;
    }

    .pb-sm-1 {
        padding-bottom: 0.25rem !important;
    }

    .pb-sm-2 {
        padding-bottom: 0.5rem !important;
    }

    .pb-sm-3 {
        padding-bottom: 1rem !important;
    }

    .pb-sm-4 {
        padding-bottom: 1.5rem !important;
    }

    .pb-sm-5 {
        padding-bottom: 3rem !important;
    }

    .ps-sm-0 {
        padding-left: 0 !important;
    }

    .ps-sm-1 {
        padding-left: 0.25rem !important;
    }

    .ps-sm-2 {
        padding-left: 0.5rem !important;
    }

    .ps-sm-3 {
        padding-left: 1rem !important;
    }

    .ps-sm-4 {
        padding-left: 1.5rem !important;
    }

    .ps-sm-5 {
        padding-left: 3rem !important;
    }

    .text-sm-start {
        text-align: left !important;
    }

    .text-sm-end {
        text-align: right !important;
    }

    .text-sm-center {
        text-align: center !important;
    }
}
@media (min-width: 768px) {
    .float-md-start {
        float: left !important;
    }

    .float-md-end {
        float: right !important;
    }

    .float-md-none {
        float: none !important;
    }

    .d-md-inline {
        display: inline !important;
    }

    .d-md-inline-block {
        display: inline-block !important;
    }

    .d-md-block {
        display: block !important;
    }

    .d-md-grid {
        display: grid !important;
    }

    .d-md-table {
        display: table !important;
    }

    .d-md-table-row {
        display: table-row !important;
    }

    .d-md-table-cell {
        display: table-cell !important;
    }

    .d-md-flex {
        display: flex !important;
    }

    .d-md-inline-flex {
        display: inline-flex !important;
    }

    .d-md-none {
        display: none !important;
    }

    .flex-md-fill {
        flex: 1 1 auto !important;
    }

    .flex-md-row {
        flex-direction: row !important;
    }

    .flex-md-column {
        flex-direction: column !important;
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }

    .flex-md-wrap {
        flex-wrap: wrap !important;
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .gap-md-0 {
        gap: 0 !important;
    }

    .gap-md-1 {
        gap: 0.25rem !important;
    }

    .gap-md-2 {
        gap: 0.5rem !important;
    }

    .gap-md-3 {
        gap: 1rem !important;
    }

    .gap-md-4 {
        gap: 1.5rem !important;
    }

    .gap-md-5 {
        gap: 3rem !important;
    }

    .justify-content-md-start {
        justify-content: flex-start !important;
    }

    .justify-content-md-end {
        justify-content: flex-end !important;
    }

    .justify-content-md-center {
        justify-content: center !important;
    }

    .justify-content-md-between {
        justify-content: space-between !important;
    }

    .justify-content-md-around {
        justify-content: space-around !important;
    }

    .justify-content-md-evenly {
        justify-content: space-evenly !important;
    }

    .align-items-md-start {
        align-items: flex-start !important;
    }

    .align-items-md-end {
        align-items: flex-end !important;
    }

    .align-items-md-center {
        align-items: center !important;
    }

    .align-items-md-baseline {
        align-items: baseline !important;
    }

    .align-items-md-stretch {
        align-items: stretch !important;
    }

    .align-content-md-start {
        align-content: flex-start !important;
    }

    .align-content-md-end {
        align-content: flex-end !important;
    }

    .align-content-md-center {
        align-content: center !important;
    }

    .align-content-md-between {
        align-content: space-between !important;
    }

    .align-content-md-around {
        align-content: space-around !important;
    }

    .align-content-md-stretch {
        align-content: stretch !important;
    }

    .align-self-md-auto {
        align-self: auto !important;
    }

    .align-self-md-start {
        align-self: flex-start !important;
    }

    .align-self-md-end {
        align-self: flex-end !important;
    }

    .align-self-md-center {
        align-self: center !important;
    }

    .align-self-md-baseline {
        align-self: baseline !important;
    }

    .align-self-md-stretch {
        align-self: stretch !important;
    }

    .order-md-first {
        order: -1 !important;
    }

    .order-md-0 {
        order: 0 !important;
    }

    .order-md-1 {
        order: 1 !important;
    }

    .order-md-2 {
        order: 2 !important;
    }

    .order-md-3 {
        order: 3 !important;
    }

    .order-md-4 {
        order: 4 !important;
    }

    .order-md-5 {
        order: 5 !important;
    }

    .order-md-last {
        order: 6 !important;
    }

    .m-md-0 {
        margin: 0 !important;
    }

    .m-md-1 {
        margin: 0.25rem !important;
    }

    .m-md-2 {
        margin: 0.5rem !important;
    }

    .m-md-3 {
        margin: 1rem !important;
    }

    .m-md-4 {
        margin: 1.5rem !important;
    }

    .m-md-5 {
        margin: 3rem !important;
    }

    .m-md-auto {
        margin: auto !important;
    }

    .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-md-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }

    .mx-md-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }

    .mx-md-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }

    .mx-md-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }

    .mx-md-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }

    .mx-md-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-md-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .my-md-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }

    .my-md-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-md-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .my-md-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }

    .my-md-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    .my-md-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .mt-md-0 {
        margin-top: 0 !important;
    }

    .mt-md-1 {
        margin-top: 0.25rem !important;
    }

    .mt-md-2 {
        margin-top: 0.5rem !important;
    }

    .mt-md-3 {
        margin-top: 1rem !important;
    }

    .mt-md-4 {
        margin-top: 1.5rem !important;
    }

    .mt-md-5 {
        margin-top: 3rem !important;
    }

    .mt-md-auto {
        margin-top: auto !important;
    }

    .me-md-0 {
        margin-right: 0 !important;
    }

    .me-md-1 {
        margin-right: 0.25rem !important;
    }

    .me-md-2 {
        margin-right: 0.5rem !important;
    }

    .me-md-3 {
        margin-right: 1rem !important;
    }

    .me-md-4 {
        margin-right: 1.5rem !important;
    }

    .me-md-5 {
        margin-right: 3rem !important;
    }

    .me-md-auto {
        margin-right: auto !important;
    }

    .mb-md-0 {
        margin-bottom: 0 !important;
    }

    .mb-md-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-md-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-md-3 {
        margin-bottom: 1rem !important;
    }

    .mb-md-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-md-5 {
        margin-bottom: 3rem !important;
    }

    .mb-md-auto {
        margin-bottom: auto !important;
    }

    .ms-md-0 {
        margin-left: 0 !important;
    }

    .ms-md-1 {
        margin-left: 0.25rem !important;
    }

    .ms-md-2 {
        margin-left: 0.5rem !important;
    }

    .ms-md-3 {
        margin-left: 1rem !important;
    }

    .ms-md-4 {
        margin-left: 1.5rem !important;
    }

    .ms-md-5 {
        margin-left: 3rem !important;
    }

    .ms-md-auto {
        margin-left: auto !important;
    }

    .p-md-0 {
        padding: 0 !important;
    }

    .p-md-1 {
        padding: 0.25rem !important;
    }

    .p-md-2 {
        padding: 0.5rem !important;
    }

    .p-md-3 {
        padding: 1rem !important;
    }

    .p-md-4 {
        padding: 1.5rem !important;
    }

    .p-md-5 {
        padding: 3rem !important;
    }

    .px-md-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-md-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    .px-md-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-md-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .px-md-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .px-md-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    .py-md-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .py-md-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    .py-md-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .py-md-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-md-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .py-md-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .pt-md-0 {
        padding-top: 0 !important;
    }

    .pt-md-1 {
        padding-top: 0.25rem !important;
    }

    .pt-md-2 {
        padding-top: 0.5rem !important;
    }

    .pt-md-3 {
        padding-top: 1rem !important;
    }

    .pt-md-4 {
        padding-top: 1.5rem !important;
    }

    .pt-md-5 {
        padding-top: 3rem !important;
    }

    .pe-md-0 {
        padding-right: 0 !important;
    }

    .pe-md-1 {
        padding-right: 0.25rem !important;
    }

    .pe-md-2 {
        padding-right: 0.5rem !important;
    }

    .pe-md-3 {
        padding-right: 1rem !important;
    }

    .pe-md-4 {
        padding-right: 1.5rem !important;
    }

    .pe-md-5 {
        padding-right: 3rem !important;
    }

    .pb-md-0 {
        padding-bottom: 0 !important;
    }

    .pb-md-1 {
        padding-bottom: 0.25rem !important;
    }

    .pb-md-2 {
        padding-bottom: 0.5rem !important;
    }

    .pb-md-3 {
        padding-bottom: 1rem !important;
    }

    .pb-md-4 {
        padding-bottom: 1.5rem !important;
    }

    .pb-md-5 {
        padding-bottom: 3rem !important;
    }

    .ps-md-0 {
        padding-left: 0 !important;
    }

    .ps-md-1 {
        padding-left: 0.25rem !important;
    }

    .ps-md-2 {
        padding-left: 0.5rem !important;
    }

    .ps-md-3 {
        padding-left: 1rem !important;
    }

    .ps-md-4 {
        padding-left: 1.5rem !important;
    }

    .ps-md-5 {
        padding-left: 3rem !important;
    }

    .text-md-start {
        text-align: left !important;
    }

    .text-md-end {
        text-align: right !important;
    }

    .text-md-center {
        text-align: center !important;
    }
}
@media (min-width: 992px) {
    .float-lg-start {
        float: left !important;
    }

    .float-lg-end {
        float: right !important;
    }

    .float-lg-none {
        float: none !important;
    }

    .d-lg-inline {
        display: inline !important;
    }

    .d-lg-inline-block {
        display: inline-block !important;
    }

    .d-lg-block {
        display: block !important;
    }

    .d-lg-grid {
        display: grid !important;
    }

    .d-lg-table {
        display: table !important;
    }

    .d-lg-table-row {
        display: table-row !important;
    }

    .d-lg-table-cell {
        display: table-cell !important;
    }

    .d-lg-flex {
        display: flex !important;
    }

    .d-lg-inline-flex {
        display: inline-flex !important;
    }

    .d-lg-none {
        display: none !important;
    }

    .flex-lg-fill {
        flex: 1 1 auto !important;
    }

    .flex-lg-row {
        flex-direction: row !important;
    }

    .flex-lg-column {
        flex-direction: column !important;
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .gap-lg-0 {
        gap: 0 !important;
    }

    .gap-lg-1 {
        gap: 0.25rem !important;
    }

    .gap-lg-2 {
        gap: 0.5rem !important;
    }

    .gap-lg-3 {
        gap: 1rem !important;
    }

    .gap-lg-4 {
        gap: 1.5rem !important;
    }

    .gap-lg-5 {
        gap: 3rem !important;
    }

    .justify-content-lg-start {
        justify-content: flex-start !important;
    }

    .justify-content-lg-end {
        justify-content: flex-end !important;
    }

    .justify-content-lg-center {
        justify-content: center !important;
    }

    .justify-content-lg-between {
        justify-content: space-between !important;
    }

    .justify-content-lg-around {
        justify-content: space-around !important;
    }

    .justify-content-lg-evenly {
        justify-content: space-evenly !important;
    }

    .align-items-lg-start {
        align-items: flex-start !important;
    }

    .align-items-lg-end {
        align-items: flex-end !important;
    }

    .align-items-lg-center {
        align-items: center !important;
    }

    .align-items-lg-baseline {
        align-items: baseline !important;
    }

    .align-items-lg-stretch {
        align-items: stretch !important;
    }

    .align-content-lg-start {
        align-content: flex-start !important;
    }

    .align-content-lg-end {
        align-content: flex-end !important;
    }

    .align-content-lg-center {
        align-content: center !important;
    }

    .align-content-lg-between {
        align-content: space-between !important;
    }

    .align-content-lg-around {
        align-content: space-around !important;
    }

    .align-content-lg-stretch {
        align-content: stretch !important;
    }

    .align-self-lg-auto {
        align-self: auto !important;
    }

    .align-self-lg-start {
        align-self: flex-start !important;
    }

    .align-self-lg-end {
        align-self: flex-end !important;
    }

    .align-self-lg-center {
        align-self: center !important;
    }

    .align-self-lg-baseline {
        align-self: baseline !important;
    }

    .align-self-lg-stretch {
        align-self: stretch !important;
    }

    .order-lg-first {
        order: -1 !important;
    }

    .order-lg-0 {
        order: 0 !important;
    }

    .order-lg-1 {
        order: 1 !important;
    }

    .order-lg-2 {
        order: 2 !important;
    }

    .order-lg-3 {
        order: 3 !important;
    }

    .order-lg-4 {
        order: 4 !important;
    }

    .order-lg-5 {
        order: 5 !important;
    }

    .order-lg-last {
        order: 6 !important;
    }

    .m-lg-0 {
        margin: 0 !important;
    }

    .m-lg-1 {
        margin: 0.25rem !important;
    }

    .m-lg-2 {
        margin: 0.5rem !important;
    }

    .m-lg-3 {
        margin: 1rem !important;
    }

    .m-lg-4 {
        margin: 1.5rem !important;
    }

    .m-lg-5 {
        margin: 3rem !important;
    }

    .m-lg-auto {
        margin: auto !important;
    }

    .mx-lg-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-lg-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }

    .mx-lg-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }

    .mx-lg-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }

    .mx-lg-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }

    .mx-lg-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }

    .mx-lg-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-lg-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .my-lg-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }

    .my-lg-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-lg-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .my-lg-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }

    .my-lg-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    .my-lg-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .mt-lg-0 {
        margin-top: 0 !important;
    }

    .mt-lg-1 {
        margin-top: 0.25rem !important;
    }

    .mt-lg-2 {
        margin-top: 0.5rem !important;
    }

    .mt-lg-3 {
        margin-top: 1rem !important;
    }

    .mt-lg-4 {
        margin-top: 1.5rem !important;
    }

    .mt-lg-5 {
        margin-top: 3rem !important;
    }

    .mt-lg-auto {
        margin-top: auto !important;
    }

    .me-lg-0 {
        margin-right: 0 !important;
    }

    .me-lg-1 {
        margin-right: 0.25rem !important;
    }

    .me-lg-2 {
        margin-right: 0.5rem !important;
    }

    .me-lg-3 {
        margin-right: 1rem !important;
    }

    .me-lg-4 {
        margin-right: 1.5rem !important;
    }

    .me-lg-5 {
        margin-right: 3rem !important;
    }

    .me-lg-auto {
        margin-right: auto !important;
    }

    .mb-lg-0 {
        margin-bottom: 0 !important;
    }

    .mb-lg-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-lg-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-lg-3 {
        margin-bottom: 1rem !important;
    }

    .mb-lg-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-lg-5 {
        margin-bottom: 3rem !important;
    }

    .mb-lg-auto {
        margin-bottom: auto !important;
    }

    .ms-lg-0 {
        margin-left: 0 !important;
    }

    .ms-lg-1 {
        margin-left: 0.25rem !important;
    }

    .ms-lg-2 {
        margin-left: 0.5rem !important;
    }

    .ms-lg-3 {
        margin-left: 1rem !important;
    }

    .ms-lg-4 {
        margin-left: 1.5rem !important;
    }

    .ms-lg-5 {
        margin-left: 3rem !important;
    }

    .ms-lg-auto {
        margin-left: auto !important;
    }

    .p-lg-0 {
        padding: 0 !important;
    }

    .p-lg-1 {
        padding: 0.25rem !important;
    }

    .p-lg-2 {
        padding: 0.5rem !important;
    }

    .p-lg-3 {
        padding: 1rem !important;
    }

    .p-lg-4 {
        padding: 1.5rem !important;
    }

    .p-lg-5 {
        padding: 3rem !important;
    }

    .px-lg-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-lg-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    .px-lg-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-lg-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .px-lg-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .px-lg-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    .py-lg-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .py-lg-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    .py-lg-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .py-lg-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-lg-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .py-lg-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .pt-lg-0 {
        padding-top: 0 !important;
    }

    .pt-lg-1 {
        padding-top: 0.25rem !important;
    }

    .pt-lg-2 {
        padding-top: 0.5rem !important;
    }

    .pt-lg-3 {
        padding-top: 1rem !important;
    }

    .pt-lg-4 {
        padding-top: 1.5rem !important;
    }

    .pt-lg-5 {
        padding-top: 3rem !important;
    }

    .pe-lg-0 {
        padding-right: 0 !important;
    }

    .pe-lg-1 {
        padding-right: 0.25rem !important;
    }

    .pe-lg-2 {
        padding-right: 0.5rem !important;
    }

    .pe-lg-3 {
        padding-right: 1rem !important;
    }

    .pe-lg-4 {
        padding-right: 1.5rem !important;
    }

    .pe-lg-5 {
        padding-right: 3rem !important;
    }

    .pb-lg-0 {
        padding-bottom: 0 !important;
    }

    .pb-lg-1 {
        padding-bottom: 0.25rem !important;
    }

    .pb-lg-2 {
        padding-bottom: 0.5rem !important;
    }

    .pb-lg-3 {
        padding-bottom: 1rem !important;
    }

    .pb-lg-4 {
        padding-bottom: 1.5rem !important;
    }

    .pb-lg-5 {
        padding-bottom: 3rem !important;
    }

    .ps-lg-0 {
        padding-left: 0 !important;
    }

    .ps-lg-1 {
        padding-left: 0.25rem !important;
    }

    .ps-lg-2 {
        padding-left: 0.5rem !important;
    }

    .ps-lg-3 {
        padding-left: 1rem !important;
    }

    .ps-lg-4 {
        padding-left: 1.5rem !important;
    }

    .ps-lg-5 {
        padding-left: 3rem !important;
    }

    .text-lg-start {
        text-align: left !important;
    }

    .text-lg-end {
        text-align: right !important;
    }

    .text-lg-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .float-xl-start {
        float: left !important;
    }

    .float-xl-end {
        float: right !important;
    }

    .float-xl-none {
        float: none !important;
    }

    .d-xl-inline {
        display: inline !important;
    }

    .d-xl-inline-block {
        display: inline-block !important;
    }

    .d-xl-block {
        display: block !important;
    }

    .d-xl-grid {
        display: grid !important;
    }

    .d-xl-table {
        display: table !important;
    }

    .d-xl-table-row {
        display: table-row !important;
    }

    .d-xl-table-cell {
        display: table-cell !important;
    }

    .d-xl-flex {
        display: flex !important;
    }

    .d-xl-inline-flex {
        display: inline-flex !important;
    }

    .d-xl-none {
        display: none !important;
    }

    .flex-xl-fill {
        flex: 1 1 auto !important;
    }

    .flex-xl-row {
        flex-direction: row !important;
    }

    .flex-xl-column {
        flex-direction: column !important;
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .gap-xl-0 {
        gap: 0 !important;
    }

    .gap-xl-1 {
        gap: 0.25rem !important;
    }

    .gap-xl-2 {
        gap: 0.5rem !important;
    }

    .gap-xl-3 {
        gap: 1rem !important;
    }

    .gap-xl-4 {
        gap: 1.5rem !important;
    }

    .gap-xl-5 {
        gap: 3rem !important;
    }

    .justify-content-xl-start {
        justify-content: flex-start !important;
    }

    .justify-content-xl-end {
        justify-content: flex-end !important;
    }

    .justify-content-xl-center {
        justify-content: center !important;
    }

    .justify-content-xl-between {
        justify-content: space-between !important;
    }

    .justify-content-xl-around {
        justify-content: space-around !important;
    }

    .justify-content-xl-evenly {
        justify-content: space-evenly !important;
    }

    .align-items-xl-start {
        align-items: flex-start !important;
    }

    .align-items-xl-end {
        align-items: flex-end !important;
    }

    .align-items-xl-center {
        align-items: center !important;
    }

    .align-items-xl-baseline {
        align-items: baseline !important;
    }

    .align-items-xl-stretch {
        align-items: stretch !important;
    }

    .align-content-xl-start {
        align-content: flex-start !important;
    }

    .align-content-xl-end {
        align-content: flex-end !important;
    }

    .align-content-xl-center {
        align-content: center !important;
    }

    .align-content-xl-between {
        align-content: space-between !important;
    }

    .align-content-xl-around {
        align-content: space-around !important;
    }

    .align-content-xl-stretch {
        align-content: stretch !important;
    }

    .align-self-xl-auto {
        align-self: auto !important;
    }

    .align-self-xl-start {
        align-self: flex-start !important;
    }

    .align-self-xl-end {
        align-self: flex-end !important;
    }

    .align-self-xl-center {
        align-self: center !important;
    }

    .align-self-xl-baseline {
        align-self: baseline !important;
    }

    .align-self-xl-stretch {
        align-self: stretch !important;
    }

    .order-xl-first {
        order: -1 !important;
    }

    .order-xl-0 {
        order: 0 !important;
    }

    .order-xl-1 {
        order: 1 !important;
    }

    .order-xl-2 {
        order: 2 !important;
    }

    .order-xl-3 {
        order: 3 !important;
    }

    .order-xl-4 {
        order: 4 !important;
    }

    .order-xl-5 {
        order: 5 !important;
    }

    .order-xl-last {
        order: 6 !important;
    }

    .m-xl-0 {
        margin: 0 !important;
    }

    .m-xl-1 {
        margin: 0.25rem !important;
    }

    .m-xl-2 {
        margin: 0.5rem !important;
    }

    .m-xl-3 {
        margin: 1rem !important;
    }

    .m-xl-4 {
        margin: 1.5rem !important;
    }

    .m-xl-5 {
        margin: 3rem !important;
    }

    .m-xl-auto {
        margin: auto !important;
    }

    .mx-xl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-xl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }

    .mx-xl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }

    .mx-xl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }

    .mx-xl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }

    .mx-xl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }

    .mx-xl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-xl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .my-xl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }

    .my-xl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-xl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .my-xl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }

    .my-xl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    .my-xl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .mt-xl-0 {
        margin-top: 0 !important;
    }

    .mt-xl-1 {
        margin-top: 0.25rem !important;
    }

    .mt-xl-2 {
        margin-top: 0.5rem !important;
    }

    .mt-xl-3 {
        margin-top: 1rem !important;
    }

    .mt-xl-4 {
        margin-top: 1.5rem !important;
    }

    .mt-xl-5 {
        margin-top: 3rem !important;
    }

    .mt-xl-auto {
        margin-top: auto !important;
    }

    .me-xl-0 {
        margin-right: 0 !important;
    }

    .me-xl-1 {
        margin-right: 0.25rem !important;
    }

    .me-xl-2 {
        margin-right: 0.5rem !important;
    }

    .me-xl-3 {
        margin-right: 1rem !important;
    }

    .me-xl-4 {
        margin-right: 1.5rem !important;
    }

    .me-xl-5 {
        margin-right: 3rem !important;
    }

    .me-xl-auto {
        margin-right: auto !important;
    }

    .mb-xl-0 {
        margin-bottom: 0 !important;
    }

    .mb-xl-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-xl-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-xl-3 {
        margin-bottom: 1rem !important;
    }

    .mb-xl-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-xl-5 {
        margin-bottom: 3rem !important;
    }

    .mb-xl-auto {
        margin-bottom: auto !important;
    }

    .ms-xl-0 {
        margin-left: 0 !important;
    }

    .ms-xl-1 {
        margin-left: 0.25rem !important;
    }

    .ms-xl-2 {
        margin-left: 0.5rem !important;
    }

    .ms-xl-3 {
        margin-left: 1rem !important;
    }

    .ms-xl-4 {
        margin-left: 1.5rem !important;
    }

    .ms-xl-5 {
        margin-left: 3rem !important;
    }

    .ms-xl-auto {
        margin-left: auto !important;
    }

    .p-xl-0 {
        padding: 0 !important;
    }

    .p-xl-1 {
        padding: 0.25rem !important;
    }

    .p-xl-2 {
        padding: 0.5rem !important;
    }

    .p-xl-3 {
        padding: 1rem !important;
    }

    .p-xl-4 {
        padding: 1.5rem !important;
    }

    .p-xl-5 {
        padding: 3rem !important;
    }

    .px-xl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-xl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    .px-xl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-xl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .px-xl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .px-xl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    .py-xl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .py-xl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    .py-xl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .py-xl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-xl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .py-xl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .pt-xl-0 {
        padding-top: 0 !important;
    }

    .pt-xl-1 {
        padding-top: 0.25rem !important;
    }

    .pt-xl-2 {
        padding-top: 0.5rem !important;
    }

    .pt-xl-3 {
        padding-top: 1rem !important;
    }

    .pt-xl-4 {
        padding-top: 1.5rem !important;
    }

    .pt-xl-5 {
        padding-top: 3rem !important;
    }

    .pe-xl-0 {
        padding-right: 0 !important;
    }

    .pe-xl-1 {
        padding-right: 0.25rem !important;
    }

    .pe-xl-2 {
        padding-right: 0.5rem !important;
    }

    .pe-xl-3 {
        padding-right: 1rem !important;
    }

    .pe-xl-4 {
        padding-right: 1.5rem !important;
    }

    .pe-xl-5 {
        padding-right: 3rem !important;
    }

    .pb-xl-0 {
        padding-bottom: 0 !important;
    }

    .pb-xl-1 {
        padding-bottom: 0.25rem !important;
    }

    .pb-xl-2 {
        padding-bottom: 0.5rem !important;
    }

    .pb-xl-3 {
        padding-bottom: 1rem !important;
    }

    .pb-xl-4 {
        padding-bottom: 1.5rem !important;
    }

    .pb-xl-5 {
        padding-bottom: 3rem !important;
    }

    .ps-xl-0 {
        padding-left: 0 !important;
    }

    .ps-xl-1 {
        padding-left: 0.25rem !important;
    }

    .ps-xl-2 {
        padding-left: 0.5rem !important;
    }

    .ps-xl-3 {
        padding-left: 1rem !important;
    }

    .ps-xl-4 {
        padding-left: 1.5rem !important;
    }

    .ps-xl-5 {
        padding-left: 3rem !important;
    }

    .text-xl-start {
        text-align: left !important;
    }

    .text-xl-end {
        text-align: right !important;
    }

    .text-xl-center {
        text-align: center !important;
    }
}
@media (min-width: 1400px) {
    .float-xxl-start {
        float: left !important;
    }

    .float-xxl-end {
        float: right !important;
    }

    .float-xxl-none {
        float: none !important;
    }

    .d-xxl-inline {
        display: inline !important;
    }

    .d-xxl-inline-block {
        display: inline-block !important;
    }

    .d-xxl-block {
        display: block !important;
    }

    .d-xxl-grid {
        display: grid !important;
    }

    .d-xxl-table {
        display: table !important;
    }

    .d-xxl-table-row {
        display: table-row !important;
    }

    .d-xxl-table-cell {
        display: table-cell !important;
    }

    .d-xxl-flex {
        display: flex !important;
    }

    .d-xxl-inline-flex {
        display: inline-flex !important;
    }

    .d-xxl-none {
        display: none !important;
    }

    .flex-xxl-fill {
        flex: 1 1 auto !important;
    }

    .flex-xxl-row {
        flex-direction: row !important;
    }

    .flex-xxl-column {
        flex-direction: column !important;
    }

    .flex-xxl-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-xxl-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-xxl-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-xxl-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-xxl-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-xxl-shrink-1 {
        flex-shrink: 1 !important;
    }

    .flex-xxl-wrap {
        flex-wrap: wrap !important;
    }

    .flex-xxl-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-xxl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .gap-xxl-0 {
        gap: 0 !important;
    }

    .gap-xxl-1 {
        gap: 0.25rem !important;
    }

    .gap-xxl-2 {
        gap: 0.5rem !important;
    }

    .gap-xxl-3 {
        gap: 1rem !important;
    }

    .gap-xxl-4 {
        gap: 1.5rem !important;
    }

    .gap-xxl-5 {
        gap: 3rem !important;
    }

    .justify-content-xxl-start {
        justify-content: flex-start !important;
    }

    .justify-content-xxl-end {
        justify-content: flex-end !important;
    }

    .justify-content-xxl-center {
        justify-content: center !important;
    }

    .justify-content-xxl-between {
        justify-content: space-between !important;
    }

    .justify-content-xxl-around {
        justify-content: space-around !important;
    }

    .justify-content-xxl-evenly {
        justify-content: space-evenly !important;
    }

    .align-items-xxl-start {
        align-items: flex-start !important;
    }

    .align-items-xxl-end {
        align-items: flex-end !important;
    }

    .align-items-xxl-center {
        align-items: center !important;
    }

    .align-items-xxl-baseline {
        align-items: baseline !important;
    }

    .align-items-xxl-stretch {
        align-items: stretch !important;
    }

    .align-content-xxl-start {
        align-content: flex-start !important;
    }

    .align-content-xxl-end {
        align-content: flex-end !important;
    }

    .align-content-xxl-center {
        align-content: center !important;
    }

    .align-content-xxl-between {
        align-content: space-between !important;
    }

    .align-content-xxl-around {
        align-content: space-around !important;
    }

    .align-content-xxl-stretch {
        align-content: stretch !important;
    }

    .align-self-xxl-auto {
        align-self: auto !important;
    }

    .align-self-xxl-start {
        align-self: flex-start !important;
    }

    .align-self-xxl-end {
        align-self: flex-end !important;
    }

    .align-self-xxl-center {
        align-self: center !important;
    }

    .align-self-xxl-baseline {
        align-self: baseline !important;
    }

    .align-self-xxl-stretch {
        align-self: stretch !important;
    }

    .order-xxl-first {
        order: -1 !important;
    }

    .order-xxl-0 {
        order: 0 !important;
    }

    .order-xxl-1 {
        order: 1 !important;
    }

    .order-xxl-2 {
        order: 2 !important;
    }

    .order-xxl-3 {
        order: 3 !important;
    }

    .order-xxl-4 {
        order: 4 !important;
    }

    .order-xxl-5 {
        order: 5 !important;
    }

    .order-xxl-last {
        order: 6 !important;
    }

    .m-xxl-0 {
        margin: 0 !important;
    }

    .m-xxl-1 {
        margin: 0.25rem !important;
    }

    .m-xxl-2 {
        margin: 0.5rem !important;
    }

    .m-xxl-3 {
        margin: 1rem !important;
    }

    .m-xxl-4 {
        margin: 1.5rem !important;
    }

    .m-xxl-5 {
        margin: 3rem !important;
    }

    .m-xxl-auto {
        margin: auto !important;
    }

    .mx-xxl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-xxl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }

    .mx-xxl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }

    .mx-xxl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }

    .mx-xxl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }

    .mx-xxl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }

    .mx-xxl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-xxl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .my-xxl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }

    .my-xxl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-xxl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .my-xxl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }

    .my-xxl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    .my-xxl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .mt-xxl-0 {
        margin-top: 0 !important;
    }

    .mt-xxl-1 {
        margin-top: 0.25rem !important;
    }

    .mt-xxl-2 {
        margin-top: 0.5rem !important;
    }

    .mt-xxl-3 {
        margin-top: 1rem !important;
    }

    .mt-xxl-4 {
        margin-top: 1.5rem !important;
    }

    .mt-xxl-5 {
        margin-top: 3rem !important;
    }

    .mt-xxl-auto {
        margin-top: auto !important;
    }

    .me-xxl-0 {
        margin-right: 0 !important;
    }

    .me-xxl-1 {
        margin-right: 0.25rem !important;
    }

    .me-xxl-2 {
        margin-right: 0.5rem !important;
    }

    .me-xxl-3 {
        margin-right: 1rem !important;
    }

    .me-xxl-4 {
        margin-right: 1.5rem !important;
    }

    .me-xxl-5 {
        margin-right: 3rem !important;
    }

    .me-xxl-auto {
        margin-right: auto !important;
    }

    .mb-xxl-0 {
        margin-bottom: 0 !important;
    }

    .mb-xxl-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-xxl-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-xxl-3 {
        margin-bottom: 1rem !important;
    }

    .mb-xxl-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-xxl-5 {
        margin-bottom: 3rem !important;
    }

    .mb-xxl-auto {
        margin-bottom: auto !important;
    }

    .ms-xxl-0 {
        margin-left: 0 !important;
    }

    .ms-xxl-1 {
        margin-left: 0.25rem !important;
    }

    .ms-xxl-2 {
        margin-left: 0.5rem !important;
    }

    .ms-xxl-3 {
        margin-left: 1rem !important;
    }

    .ms-xxl-4 {
        margin-left: 1.5rem !important;
    }

    .ms-xxl-5 {
        margin-left: 3rem !important;
    }

    .ms-xxl-auto {
        margin-left: auto !important;
    }

    .p-xxl-0 {
        padding: 0 !important;
    }

    .p-xxl-1 {
        padding: 0.25rem !important;
    }

    .p-xxl-2 {
        padding: 0.5rem !important;
    }

    .p-xxl-3 {
        padding: 1rem !important;
    }

    .p-xxl-4 {
        padding: 1.5rem !important;
    }

    .p-xxl-5 {
        padding: 3rem !important;
    }

    .px-xxl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-xxl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    .px-xxl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-xxl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .px-xxl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .px-xxl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    .py-xxl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .py-xxl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    .py-xxl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .py-xxl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-xxl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .py-xxl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .pt-xxl-0 {
        padding-top: 0 !important;
    }

    .pt-xxl-1 {
        padding-top: 0.25rem !important;
    }

    .pt-xxl-2 {
        padding-top: 0.5rem !important;
    }

    .pt-xxl-3 {
        padding-top: 1rem !important;
    }

    .pt-xxl-4 {
        padding-top: 1.5rem !important;
    }

    .pt-xxl-5 {
        padding-top: 3rem !important;
    }

    .pe-xxl-0 {
        padding-right: 0 !important;
    }

    .pe-xxl-1 {
        padding-right: 0.25rem !important;
    }

    .pe-xxl-2 {
        padding-right: 0.5rem !important;
    }

    .pe-xxl-3 {
        padding-right: 1rem !important;
    }

    .pe-xxl-4 {
        padding-right: 1.5rem !important;
    }

    .pe-xxl-5 {
        padding-right: 3rem !important;
    }

    .pb-xxl-0 {
        padding-bottom: 0 !important;
    }

    .pb-xxl-1 {
        padding-bottom: 0.25rem !important;
    }

    .pb-xxl-2 {
        padding-bottom: 0.5rem !important;
    }

    .pb-xxl-3 {
        padding-bottom: 1rem !important;
    }

    .pb-xxl-4 {
        padding-bottom: 1.5rem !important;
    }

    .pb-xxl-5 {
        padding-bottom: 3rem !important;
    }

    .ps-xxl-0 {
        padding-left: 0 !important;
    }

    .ps-xxl-1 {
        padding-left: 0.25rem !important;
    }

    .ps-xxl-2 {
        padding-left: 0.5rem !important;
    }

    .ps-xxl-3 {
        padding-left: 1rem !important;
    }

    .ps-xxl-4 {
        padding-left: 1.5rem !important;
    }

    .ps-xxl-5 {
        padding-left: 3rem !important;
    }

    .text-xxl-start {
        text-align: left !important;
    }

    .text-xxl-end {
        text-align: right !important;
    }

    .text-xxl-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .fs-1 {
        font-size: 2.5rem !important;
    }

    .fs-2 {
        font-size: 2rem !important;
    }

    .fs-3 {
        font-size: 1.75rem !important;
    }

    .fs-4 {
        font-size: 1.5rem !important;
    }
}
@media print {
    .d-print-inline {
        display: inline !important;
    }

    .d-print-inline-block {
        display: inline-block !important;
    }

    .d-print-block {
        display: block !important;
    }

    .d-print-grid {
        display: grid !important;
    }

    .d-print-table {
        display: table !important;
    }

    .d-print-table-row {
        display: table-row !important;
    }

    .d-print-table-cell {
        display: table-cell !important;
    }

    .d-print-flex {
        display: flex !important;
    }

    .d-print-inline-flex {
        display: inline-flex !important;
    }

    .d-print-none {
        display: none !important;
    }
}
html,
body {
    height: 100%;
}

#layoutAuthentication {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
#layoutAuthentication #layoutAuthentication_content {
    min-width: 0;
    flex-grow: 1;
}
#layoutAuthentication #layoutAuthentication_footer {
    min-width: 0;
}

#layoutSidenav {
    display: flex;
}
#layoutSidenav #layoutSidenav_nav {
    flex-basis: 225px;
    flex-shrink: 0;
    transition: transform 0.15s ease-in-out;
    z-index: 1038;
    transform: translateX(-225px);
}
#layoutSidenav #layoutSidenav_content {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-width: 0;
    flex-grow: 1;
    min-height: calc(100vh - 56px);
    margin-left: -225px;
}

.sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
    transform: translateX(0);
}
.sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #000;
    z-index: 1037;
    opacity: 0.5;
    transition: opacity 0.3s ease-in-out;
}

@media (min-width: 992px) {
    #layoutSidenav #layoutSidenav_nav {
        transform: translateX(0);
    }
    #layoutSidenav #layoutSidenav_content {
        margin-left: 0;
        transition: margin 0.15s ease-in-out;
    }

    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
        transform: translateX(-225px);
    }
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content {
        margin-left: -225px;
    }
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
        display: none;
    }
}
.sb-nav-fixed .sb-topnav {
    z-index: 1039;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav {
    width: 225px;
    height: 100vh;
    z-index: 1038;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav {
    padding-top: 56px;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav .sb-sidenav-menu {
    overflow-y: auto;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_content {
    padding-left: 225px;
    top: 56px;
}

#layoutError {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
#layoutError #layoutError_content {
    min-width: 0;
    flex-grow: 1;
}
#layoutError #layoutError_footer {
    min-width: 0;
}

.img-error {
    max-width: 20rem;
}

.nav .nav-link .sb-nav-link-icon,
.sb-sidenav-menu .nav-link .sb-nav-link-icon {
    margin-right: 0.5rem;
}

.sb-topnav {
    padding-left: 0;
    height: 56px;
    z-index: 1039;
}
.sb-topnav .navbar-brand {
    width: 225px;
    margin: 0;
}
.sb-topnav.navbar-dark #sidebarToggle {
    color: rgba(255, 255, 255, 0.5);
}
.sb-topnav.navbar-light #sidebarToggle {
    color: #212529;
}

.sb-sidenav {
    display: flex;
    flex-direction: column;
    height: 100%;
    flex-wrap: nowrap;
}
.sb-sidenav .sb-sidenav-menu {
    flex-grow: 1;
}
.sb-sidenav .sb-sidenav-menu .nav {
    flex-direction: column;
    flex-wrap: nowrap;
}
.sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-heading {
    padding: 1.75rem 1rem 0.75rem;
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: uppercase;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link {
    display: flex;
    align-items: center;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    position: relative;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-nav-link-icon {
    font-size: 0.9rem;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-sidenav-collapse-arrow {
    display: inline-block;
    margin-left: auto;
    transition: transform 0.15s ease;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link.collapsed .sb-sidenav-collapse-arrow {
    transform: rotate(-90deg);
}
.sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-nested {
    margin-left: 1.5rem;
    flex-direction: column;
}
.sb-sidenav .sb-sidenav-footer {
    padding: 0.75rem;
    flex-shrink: 0;
}

.sb-sidenav-dark {
    background-color: #212529;
    color: rgba(255, 255, 255, 0.5);
}
.sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
    color: rgba(255, 255, 255, 0.25);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link {
    color: rgba(255, 255, 255, 0.5);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon {
    color: rgba(255, 255, 255, 0.25);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
    color: rgba(255, 255, 255, 0.25);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
    color: #fff;
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
    color: #fff;
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
    color: #fff;
}
.sb-sidenav-dark .sb-sidenav-footer {
    background-color: #343a40;
}

.sb-sidenav-light {
    background-color: #f8f9fa;
    color: #212529;
}
.sb-sidenav-light .sb-sidenav-menu .sb-sidenav-menu-heading {
    color: #adb5bd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link {
    color: #212529;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link .sb-nav-link-icon {
    color: #adb5bd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
    color: #adb5bd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link:hover {
    color: #0d6efd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link.active {
    color: #0d6efd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
    color: #0d6efd;
}
.sb-sidenav-light .sb-sidenav-footer {
    background-color: #e9ecef;
}

.dataTable-wrapper .dataTable-container {
    font-size: 0.875rem;
}

.dataTable-wrapper.no-header .dataTable-container {
    border-top: none;
}

.dataTable-wrapper.no-footer .dataTable-container {
    border-bottom: none;
}

.dataTable-top {
    padding: 0 0 1rem;
}

.dataTable-bottom {
    padding: 0;
}

.dataTable-top > nav:first-child,
.dataTable-top > div:first-child,
.dataTable-bottom > nav:first-child,
.dataTable-bottom > div:first-child {
    float: left;
}

.dataTable-top > nav:last-child,
.dataTable-top > div:last-child,
.dataTable-bottom > nav:last-child,
.dataTable-bottom > div:last-child {
    float: right;
}

.dataTable-selector {
    width: auto;
    display: inline-block;
    padding-left: 1.125rem;
    padding-right: 2.125rem;
    margin-right: 0.25rem;
}

.dataTable-info {
    margin: 7px 0;
}

/* PAGER */
.dataTable-pagination a:hover {
    background-color: #e9ecef;
}

.dataTable-pagination .active a,
.dataTable-pagination .active a:focus,
.dataTable-pagination .active a:hover {
    background-color: #0d6efd;
}

.dataTable-pagination .ellipsis a,
.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
    cursor: not-allowed;
}

.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
    cursor: not-allowed;
    opacity: 0.4;
}

.dataTable-pagination .pager a {
    font-weight: bold;
}

/* TABLE */
.dataTable-table {
    border-collapse: collapse;
}

.dataTable-table > tbody > tr > td,
.dataTable-table > tbody > tr > th,
.dataTable-table > tfoot > tr > td,
.dataTable-table > tfoot > tr > th,
.dataTable-table > thead > tr > td,
.dataTable-table > thead > tr > th {
    vertical-align: top;
    padding: 0.5rem 0.5rem;
}

.dataTable-table > thead > tr > th {
    vertical-align: bottom;
    text-align: left;
    border-bottom: none;
}

.dataTable-table > tfoot > tr > th {
    vertical-align: bottom;
    text-align: left;
}

.dataTable-table th {
    vertical-align: bottom;
    text-align: left;
}

.dataTable-table th a {
    text-decoration: none;
    color: inherit;
}

.dataTable-sorter {
    display: inline-block;
    height: 100%;
    position: relative;
    width: 100%;
    padding-right: 1rem;
}

.dataTable-sorter::before,
.dataTable-sorter::after {
    content: "";
    height: 0;
    width: 0;
    position: absolute;
    right: 4px;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    opacity: 0.2;
}

.dataTable-sorter::before {
    bottom: 4px;
}

.dataTable-sorter::after {
    top: 0px;
}

.asc .dataTable-sorter::after,
.desc .dataTable-sorter::before {
    opacity: 0.6;
}

.dataTables-empty {
    text-align: center;
}

.dataTable-top::after,
.dataTable-bottom::after {
    clear: both;
    content: " ";
    display: table;
}

.btn-datatable {
    height: 20px !important;
    width: 20px !important;
    font-size: 0.75rem;
    border-radius: 0.25rem !important;
}
</style>

<!--<body>-->