import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import * as packages from './package.json';
import fsExtra from 'fs-extra'; // Import fs-extra as a default import
import { join } from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [

                'resources/css/app.css', 
                'resources/sass/app.scss', 
                'resources/js/app.js',

                // Resources assets js file paths
                'resources/assets/js/401-error',
                'resources/assets/js/about',
                'resources/assets/js/add-products',
                'resources/assets/js/addproduct',
                'resources/assets/js/alerts',
                'resources/assets/js/analyticsdashboard',
                'resources/assets/js/apexchart',
                'resources/assets/js/apexcharts-area',
                'resources/assets/js/apexcharts-bar',
                'resources/assets/js/apexcharts-bubble',
                'resources/assets/js/apexcharts-candlestick',
                'resources/assets/js/apexcharts-column',
                'resources/assets/js/apexcharts-heatmap',
                'resources/assets/js/apexcharts-line',
                // 'resources/assets/js/apexcharts-mixed',
                'resources/assets/js/apexcharts-pie',
                'resources/assets/js/apexcharts-polararea',
                'resources/assets/js/apexcharts-radar',
                'resources/assets/js/apexcharts-radialbar',
                'resources/assets/js/apexcharts-rangearea',
                'resources/assets/js/apexcharts-scatter',
                'resources/assets/js/apexcharts-timeline',
                'resources/assets/js/apexcharts-treemap',
                'resources/assets/js/authentication-main',
                'resources/assets/js/authentication',
                'resources/assets/js/blog-create',
                'resources/assets/js/blog-edit',
                'resources/assets/js/blog',
                'resources/assets/js/canada',
                'resources/assets/js/cards',
                'resources/assets/js/cart',
                'resources/assets/js/chartjs-charts',
                'resources/assets/js/checkout',
                'resources/assets/js/choices',
                'resources/assets/js/color-picker',
                'resources/assets/js/colorpicker',
                'resources/assets/js/contacts',
                'resources/assets/js/coursedashboard',
                'resources/assets/js/create-invoice',
                'resources/assets/js/create-project',
                'resources/assets/js/crmdashboard',
                'resources/assets/js/cryptodashboard',
                'resources/assets/js/custom-switcher',
                'resources/assets/js/custom',
                'resources/assets/js/dashboards-charts',
                'resources/assets/js/datatable',
                'resources/assets/js/datatables',
                'resources/assets/js/date&time_pickers',
                'resources/assets/js/defaultmenu',
                'resources/assets/js/draggable-cards',
                'resources/assets/js/draggable',
                'resources/assets/js/echarts',
                'resources/assets/js/edit-products',
                'resources/assets/js/editdata',
                'resources/assets/js/editproduct',
                'resources/assets/js/error',
                'resources/assets/js/file-details',
                'resources/assets/js/file-manager',
                'resources/assets/js/fileupload',
                'resources/assets/js/flatpickr',
                'resources/assets/js/form-input-mask',
                'resources/assets/js/form-layout',
                'resources/assets/js/form-validation',
                'resources/assets/js/fullcalendar',
                'resources/assets/js/gallery',
                'resources/assets/js/google-maps',
                'resources/assets/js/grid',
                'resources/assets/js/index',
                'resources/assets/js/invoice-list',
                'resources/assets/js/invoice',
                'resources/assets/js/italy',
                'resources/assets/js/jobsdashboard',
                'resources/assets/js/jsvectormap',
                'resources/assets/js/landing',
                'resources/assets/js/leaflet',
                'resources/assets/js/mail-inbox',
                'resources/assets/js/mail-settings',
                'resources/assets/js/mail',
                'resources/assets/js/markup',
                'resources/assets/js/masonry',
                'resources/assets/js/modal',
                'resources/assets/js/nftdashboard',
                'resources/assets/js/notifications',
                'resources/assets/js/nouislider',
                'resources/assets/js/order-details',
                'resources/assets/js/prism-custom',
                'resources/assets/js/product-details',
                'resources/assets/js/product-list',
                'resources/assets/js/product',
                'resources/assets/js/profile-settings',
                'resources/assets/js/profile',
                'resources/assets/js/projectsdashboard',
                'resources/assets/js/quill-editor',
                'resources/assets/js/quill',
                'resources/assets/js/rangeslider',
                'resources/assets/js/rating',
                'resources/assets/js/ratings',
                'resources/assets/js/reviews',
                'resources/assets/js/russia',
                'resources/assets/js/scrollspy',
                'resources/assets/js/select',
                'resources/assets/js/select2',
                'resources/assets/js/simplebar',
                'resources/assets/js/spain',
                'resources/assets/js/stepper',
                'resources/assets/js/sticky',
                'resources/assets/js/stocksdahboard',
                'resources/assets/js/sweet-alerts',
                'resources/assets/js/swetalert',
                'resources/assets/js/swiper',
                'resources/assets/js/tabulator',
                'resources/assets/js/task-kanban-board',
                'resources/assets/js/task-list',
                'resources/assets/js/team',
                'resources/assets/js/terms_conditions',
                'resources/assets/js/Toasts',
                'resources/assets/js/todo',
                'resources/assets/js/todolist',
                'resources/assets/js/tom-select',
                'resources/assets/js/treeview',
                'resources/assets/js/us-merc-en',
                'resources/assets/js/validation',
                'resources/assets/js/widgets',
                'resources/assets/js/wishlist',

            ],
            refresh: false,
        }),

        viteStaticCopy({
            targets: [
              {
                src: ([
                    'resources/assets/images/',
                    'resources/assets/video/',
                    'resources/assets/iconfonts/',
                    'resources/assets/js/main.js',
                    'resources/assets/js/sticky.js',
                    'resources/assets/js/two-step-verification.js',
                    'resources/assets/js/show-password.js',
                    'resources/assets/js/dataseries.js',
                    'resources/assets/js/products.js',
                    'resources/assets/js/hrmdashboard.js',
                    'resources/assets/js/apex-github-data.js',
                    'resources/assets/js/apexcharts-stock-prices.js',
                    'resources/assets/js/apexcharts-candlestick-seriesdata.js',
                    'resources/assets/js/apexcharts-irregulardata.js',
                    'resources/assets/js/coming-soon.js',
                    'resources/assets/js/under-maintenance.js',
                    'resources/assets/js/apexcharts-dayjs.js',
                    'resources/assets/js/chat.js',
                    'resources/assets/js/switch.js',
                    'resources/assets/js/apexcharts-boxplot.js',
                    'resources/assets/js/apexcharts-mixed.js',
                ]),
                dest: 'assets/'
              }
            ]
        }),

        {
            // Use a custom plugin for copying distribution files
            name: 'copy-dist-files',
            writeBundle: async () => {
                const destDir = 'public/build/assets/libs';  // Update the destination directory
      
              for (const dep of Object.keys(packages.dependencies)) {
                const srcPath = join('node_modules', dep, 'dist');
                const destPath = join(destDir, dep);
      
                // Check if the 'dist' directory exists for the dependency
                if (await fsExtra.pathExists(srcPath)) {
                  // Copy the distribution files (contents of 'dist') to the destination directory
                  await fsExtra.copy(srcPath, destPath, {
                    overwrite: true,
                    recursive: true,
                  });
      
                  // Remove the 'dist' directory from the destination
                  await fsExtra.remove(join(destPath, 'dist'));
                } else {
                  // If 'dist' folder doesn't exist, check if the package itself exists and copy it.
                  const packageSrcPath = join('node_modules', dep);
                  const packageDestPath = join(destDir, dep);
      
                  if (await fsExtra.pathExists(packageSrcPath)) {
                    await fsExtra.copy(packageSrcPath, packageDestPath, {
                      overwrite: true,
                      recursive: true,
                    });
                  }
                }
              }
            },
        },

        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    server: {
      hmr: {
        host: 'localhost',  // Ensure this is set to localhost
      },
    },
    build: {
        chunkSizeWarningLimit: 1600,
        outDir: 'public/build',
        emptyOutDir: true,
    },
});
    