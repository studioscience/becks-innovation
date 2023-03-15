import { useState, useEffect } from "react";
const { registerBlockType } = wp.blocks;
const {
    PlainText,
    RichText,
    MediaUpload,
    BlockControls,
    InspectorControls,
    ColorPalette,
} = wp.editor;
const { IconButton, RangeControl, PanelBody, RadioControl } = wp.components;
const { useSelect } = wp.data;





registerBlockType('gutenberg-swps/swps-cta', {
    title: 'Resource Listing And Filters',
    icon: 'format-image',
    category: 'layout',

    attributes: {
        title: {
            type: 'string',
            source: 'html',
            selector: 'h3',
        },
        category: {
            type: 'number',
            default: -1,
        },
        titleColor: {
            type: 'string',
            default: 'white',
        },
        overlayColor: {
            type: 'string',
            default: 'black',
        },
        overlayOpacity: {
            type: 'number',
            default: 0.3,
        },
        backgroundImage: {
            type: 'string',
            default: null,
        }
    },

    edit({ attributes, className, setAttributes }) {
        const {
            title,
            backgroundImage,
            titleColor,
            overlayColor,
            overlayOpacity,
            category
        } = attributes;

        function onChangeTitle(newTitle) {
            setAttributes({ title: newTitle });
        }

        let [selectedCategory, setSelectedCategory] = useState("all");
        let [categoryList, setCategoryList] = useState(null);
        console.log(RadioControl);
        console.log("WP Data:", wp.data);

        const categories = useSelect(select =>
            select('core').getEntityRecords('taxonomy', 'category')
        );

        // console.log("Categories", categories);
        useEffect(() => {
            if (categories != null) {
                let list = [];
                list.push({label: "All", value: "all"});
                for (let cat of categories) {
                    let { id, name } = cat;
                    if (name !== "Featured" && name !== "Uncategorized") {
                        list.push({ label: name, value: `${id}` });
                    }
                }
                console.log(list);
                setCategoryList(list);
            }
        }, [categories])

        return (
            <div>
                <InspectorControls style={{ marginBottom: '40px' }}>
                    <PanelBody title={'Font Color Settings'}>
                        <div style={{ marginTop: '20px' }}>
                        {categoryList != null ?
                            <>
                            <p>
                                <strong>Select a Main Category (Optional):</strong>
                            </p>
                           
                                <RadioControl
                                    label="User type"
                                    help="The type of the current user"
                                    selected={category}
                                    options={categoryList}
                                    onChange={(value) => {setSelectedCategory(value); setAttributes({ category: value }); console.log("Value", value)}}
                                />
                                </> : <></>}
                        </div>
                    </PanelBody>
 				</InspectorControls>
                <div
                    className="cta-container"
                    style={{
                        backgroundImage: `url(${backgroundImage})`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                        backgroundRepeat: 'no-repeat',
                    }}
                >
                    <div
                        className="cta-overlay"
                        style={{
                            background: overlayColor,
                            opacity: overlayOpacity,
                        }}
                    ></div>
                    <div className="cta-content">
                        <RichText
                            key="editable"
                            tagName="h3"
                            className={className}
                            placeholder="Title of Resources Listing Section"
                            onChange={onChangeTitle}
                            value={title}
                            style={{ color: titleColor }}
                        />
                        <BlockControls></BlockControls>
                    </div>
                </div>
            </div>
        );
    },

    save({ attributes }) {
        const {
            title,
            body,
            titleColor,
            bodyColor,
            overlayColor,
            overlayOpacity,
            backgroundImage,
            url,
            buttonText,
        } = attributes;

        return (
            <div className="mt-block-user-card-wrapper" data-mt-attributes={JSON.stringify(attributes)}>
                {`Resources List Block\nSelected Category:${attributes.category}`}
            </div>
        );
    },
});
