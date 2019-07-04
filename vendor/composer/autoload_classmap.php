<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'WPGraphQL\\Extensions\\WooCommerce\\Actions' => $baseDir . '/includes/class-actions.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Cart_Items' => $baseDir . '/includes/connection/class-cart-items.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Coupons' => $baseDir . '/includes/connection/class-coupons.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Customers' => $baseDir . '/includes/connection/class-customers.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Order_Items' => $baseDir . '/includes/connection/class-order-items.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Orders' => $baseDir . '/includes/connection/class-orders.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Posts' => $baseDir . '/includes/connection/class-posts.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Product_Attributes' => $baseDir . '/includes/connection/class-product-attributes.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Products' => $baseDir . '/includes/connection/class-products.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Refunds' => $baseDir . '/includes/connection/class-refunds.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Shipping_Methods' => $baseDir . '/includes/connection/class-shipping-methods.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Tax_Rates' => $baseDir . '/includes/connection/class-tax-rates.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Variation_Attributes' => $baseDir . '/includes/connection/class-variation-attributes.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\WC_Connection' => $baseDir . '/includes/connection/class-wc-connection.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\WC_Terms' => $baseDir . '/includes/connection/class-wc-terms.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Cart_Item_Connection_Resolver' => $baseDir . '/includes/data/connection/class-cart-item-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Coupon_Connection_Resolver' => $baseDir . '/includes/data/connection/class-coupon-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Customer_Connection_Resolver' => $baseDir . '/includes/data/connection/class-customer-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Order_Connection_Resolver' => $baseDir . '/includes/data/connection/class-order-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Order_Item_Connection_Resolver' => $baseDir . '/includes/data/connection/class-order-item-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Post_Connection_Resolver' => $baseDir . '/includes/data/connection/class-post-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Product_Attribute_Connection_Resolver' => $baseDir . '/includes/data/connection/class-product-attribute-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Product_Connection_Resolver' => $baseDir . '/includes/data/connection/class-product-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Refund_Connection_Resolver' => $baseDir . '/includes/data/connection/class-refund-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Shipping_Method_Connection_Resolver' => $baseDir . '/includes/data/connection/class-shipping-method-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Tax_Rate_Connection_Resolver' => $baseDir . '/includes/data/connection/class-tax-rate-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Variation_Attribute_Connection_Resolver' => $baseDir . '/includes/data/connection/class-variation-attribute-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\WC_Connection_Resolver' => $baseDir . '/includes/data/connection/trait-wc-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\WC_Terms_Connection_Resolver' => $baseDir . '/includes/data/connection/class-wc-terms-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Factory' => $baseDir . '/includes/data/class-factory.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Loader\\WC_Customer_Loader' => $baseDir . '/includes/data/loader/class-wc-customer-loader.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Loader\\WC_Post_Crud_Loader' => $baseDir . '/includes/data/loader/class-wc-post-crud-loader.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Mutation\\Cart_Mutation' => $baseDir . '/includes/data/mutation/class-cart-mutation.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Mutation\\Customer_Mutation' => $baseDir . '/includes/data/mutation/class-customer-mutation.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Mutation\\Order_Mutation' => $baseDir . '/includes/data/mutation/class-order-mutation.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Filters' => $baseDir . '/includes/class-filters.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Coupon' => $baseDir . '/includes/model/class-coupon.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Crud_CPT' => $baseDir . '/includes/model/class-crud-cpt.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Customer' => $baseDir . '/includes/model/class-customer.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Order' => $baseDir . '/includes/model/class-order.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Order_Item' => $baseDir . '/includes/model/class-order-item.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Product' => $baseDir . '/includes/model/class-product.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Product_Variation' => $baseDir . '/includes/model/class-product-variation.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Refund' => $baseDir . '/includes/model/class-refund.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Shipping_Method' => $baseDir . '/includes/model/class-shipping-method.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Shop_Manager_Caps' => $baseDir . '/includes/model/trait-shop-manager-caps.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Tax_Rate' => $baseDir . '/includes/model/class-tax-rate.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Add_Fee' => $baseDir . '/includes/mutation/class-cart-add-fee.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Add_Item' => $baseDir . '/includes/mutation/class-cart-add-item.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Apply_Coupon' => $baseDir . '/includes/mutation/class-cart-apply-coupon.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Empty' => $baseDir . '/includes/mutation/class-cart-empty.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Remove_Coupons' => $baseDir . '/includes/mutation/class-cart-remove-coupons.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Remove_Items' => $baseDir . '/includes/mutation/class-cart-remove-items.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Restore_Items' => $baseDir . '/includes/mutation/class-cart-restore-items.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Update_Item_Quantity' => $baseDir . '/includes/mutation/class-cart-update-item-quantity.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Customer_Register' => $baseDir . '/includes/mutation/class-customer-register.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Customer_Update' => $baseDir . '/includes/mutation/class-customer-update.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Order_Create' => $baseDir . '/includes/mutation/class-order-create.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Backorders' => $baseDir . '/includes/type/enum/class-backorders.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Catalog_Visibility' => $baseDir . '/includes/type/enum/class-catalog-visibility.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Countries' => $baseDir . '/includes/type/enum/class-countries.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Customer_Connection_Orderby_Enum' => $baseDir . '/includes/type/enum/class-customer-connection-orderby-enum.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Discount_Type' => $baseDir . '/includes/type/enum/class-discount-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Manage_Stock' => $baseDir . '/includes/type/enum/class-manage-stock.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Order_Status' => $baseDir . '/includes/type/enum/class-order-status.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Pricing_Field_Format' => $baseDir . '/includes/type/enum/class-pricing-field-format.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Product_Types' => $baseDir . '/includes/type/enum/class-product-types.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Stock_Status' => $baseDir . '/includes/type/enum/class-stock-status.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Tax_Class' => $baseDir . '/includes/type/enum/class-tax-class.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Tax_Rate_Connection_Orderby_Enum' => $baseDir . '/includes/type/enum/class-tax-rate-connection-orderby-enum.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Tax_Status' => $baseDir . '/includes/type/enum/class-tax-status.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\WC_Connection_Orderby_Enum' => $baseDir . '/includes/type/enum/class-wc-connection-orderby-enum.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Customer_Address_Input' => $baseDir . '/includes/type/input/class-customer-address-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Fee_Line_Input' => $baseDir . '/includes/type/input/class-fee-line-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Line_Item_Input' => $baseDir . '/includes/type/input/class-line-item-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Meta_Data_Input' => $baseDir . '/includes/type/input/class-meta-data-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Product_Attribute_Input' => $baseDir . '/includes/type/input/class-product-attribute-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Shipping_Line_Input' => $baseDir . '/includes/type/input/class-shipping-line-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Tax_Rate_Connection_Orderby_Input' => $baseDir . '/includes/type/input/class-tax-rate-connection-orderby-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\WC_Connection_Orderby_Input' => $baseDir . '/includes/type/input/class-wc-connection-orderby-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Cart_Type' => $baseDir . '/includes/type/object/class-cart-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Coupon_Type' => $baseDir . '/includes/type/object/class-coupon-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Customer_Address_Type' => $baseDir . '/includes/type/object/class-customer-address-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Customer_Type' => $baseDir . '/includes/type/object/class-customer-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Order_Item_Type' => $baseDir . '/includes/type/object/class-order-item-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Order_Type' => $baseDir . '/includes/type/object/class-order-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Attribute_Type' => $baseDir . '/includes/type/object/class-product-attribute-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Download_Type' => $baseDir . '/includes/type/object/class-product-download-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Type' => $baseDir . '/includes/type/object/class-product-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Variation_Type' => $baseDir . '/includes/type/object/class-product-variation-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Refund_Type' => $baseDir . '/includes/type/object/class-refund-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Shipping_Method_Type' => $baseDir . '/includes/type/object/class-shipping-method-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Tax_Rate_Type' => $baseDir . '/includes/type/object/class-tax-rate-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Variation_Attribute_Type' => $baseDir . '/includes/type/object/class-variation-attribute-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Utils\\QL_Session_Handler' => $baseDir . '/includes/utils/class-ql-session-handler.php',
    'WP_GraphQL_WooCommerce' => $baseDir . '/includes/class-wp-graphql-woocommerce.php',
);
