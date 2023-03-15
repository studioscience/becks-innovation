import React, { useState, useEffect, useCallback } from 'react';
import ReactDOM from 'react-dom';
import apiFetch from "@wordpress/api-fetch";

const ResourceListing = (props) => {
    const { attributes, toggleModal = false, isModalOpen = false } = props;
    let resourceArr = [{}, {}, {}, {}, {}, {}, {}, {}, {}];
    

    const [loadedPosts, setLoadedPosts] = useState([]);
    const [isLoaded, setIsLoaded] = useState(false);

    const [maxPages, setMaxPages] = useState(1);
    const [paginationRange, setPaginationRange]= useState([1]);

    const [tags, setTags] = useState([]);
    const [categories, setCategories] = useState([]);

    const [selectedCategories, setSelectedCategories] = useState(attributes.category && attributes.category != "all" && attributes.category != -1 ? [parseInt(attributes.category)] : []);
    const [selectedTag, setSelectedTag] = useState("All Topics");
    const [searchTerm, setSearchTerm] = useState("");
    const [currentPage, setCurrentPage] = useState(1);

    useEffect(() => {
        try {
            setIsLoaded(false);
            apiFetch({
                path: `/studioscience/v1/resources/filter?page=1`,

            }).then((resources) => {
                console.log("Results", resources);
                console.log("Topic", resources["topic"]);
                setMaxPages(resources["max_pages"]);
                let range = [];
                for(let x = 1; x <= resources["max_pages"]; x++){
                    range.push(x);
                }
                setPaginationRange(range);
                delete resources["max_pages"];
                delete resources["topic"];
                setLoadedPosts(resources);
                setIsLoaded(true);
            });
            apiFetch({
                path: "/studioscience/v1/resources/categories",

            }).then((categories) => {
                console.log("Results Categories", categories);
                setCategories(categories);
            });
            apiFetch({
                path: "/studioscience/v1/resources/tags",

            }).then((tags) => {
                console.log("Results Tags", tags);
                setTags(tags);
            });
        } catch (error) {
            console.log(error);
            setIsLoaded(true);
        }
    }, []);

    useEffect(()=>{
        try {
            setIsLoaded(false);
            let API_Path = `/studioscience/v1/resources/filter?page=${currentPage}${searchTerm != '' ? `&searchTerm=${searchTerm}` : ''}${selectedTag != "All Topics" ? `&topic=${selectedTag}` : ''}${selectedCategories.length > 0 ? `&categories=${selectedCategories.join(',')}` : ''}`;
            console.log("API_Path", API_Path);
            apiFetch({
                path: API_Path,
            }).then((resources) => {
                console.log("Results", resources);
                console.log("Topic", resources["topic"]);
                setMaxPages(resources["max_pages"]);
                let range = [];
                for(let x = 1; x <= resources["max_pages"]; x++){
                    range.push(x);
                }
                setPaginationRange(range);
                delete resources["max_pages"];
                delete resources["topic"];
                setLoadedPosts(resources);
                setIsLoaded(true);
            });
        } catch (error) {
            console.log(error);
            setIsLoaded(true);
        }
    }, [searchTerm, currentPage, selectedCategories, selectedTag])

    const selectCategory = useCallback((categoryId) => {
        console.log("categoryId", categoryId, selectedCategories);
        let tempArr = [...selectedCategories];
        if(!tempArr.includes(categoryId)){
            tempArr.push(categoryId);
        } else {
            tempArr.splice(tempArr.indexOf(categoryId), 1);
        }
        setSelectedCategories(tempArr);
    }, [selectedCategories])

    const onNext = () => {
        setCurrentPage((cur)=>{ return cur +1});
    };

    const onPrevious = () => {
        setCurrentPage((cur)=>{ return cur -1});
    };

    return (
        <>
            <div className="c-mt-title-row-wrapper w-full hidden lg:flex lg:flex-row my-10">
                <h2 className="c-mt-resource-title grow text-4xl font-medium leading-8 tracking-tight text-black sm:text-4xl pb-5">
                    {attributes?.title}
                </h2>
                <div className="c-mt-resource-search flex-initial w-80">
                    <input className="rounded-lg search-bar w-80" placeholder="Search" type="text" value={searchTerm} name="s" id="s" style={{ "min-width": "360px" }} onChange={(event)=>{ console.log(event.target.value); setSearchTerm(()=>event.target.value);}} />
                </div>
            </div>
            <div className="c-mt-title-row-wrapper w-full flex flex-col lg:hidden my-10">
                <h2 className="c-mt-resource-title grow text-4xl font-medium leading-8 tracking-tight text-black sm:text-4xl pb-5">
                    {attributes?.title}
                </h2>
                <div className="c-mt-resource-search flex-initial w-80">
                    <input className="rounded-lg search-bar w-80" placeholder="Search" type="text" value={searchTerm} name="s" id="s" style={{ "min-width": "360px" }} onChange={(event)=>{ console.log(event.target.value); setSearchTerm(()=>event.target.value);}} />
                </div>
            </div>
            {/* <div className="c-mt-resources-listed mx-auto mt-12 grid grid-cols-1 max-w-lg gap-12 grid-flow-row lg:max-w-none lg:grid-cols-4 lg:grid-rows-3"> */}
            <div className="c-mt-resources-listed mx-auto mt-12 flex flex-row gap-12">
                <div className="c-mt-resources-list mx-auto flex-3 grid grid-cols-1 max-w-lg gap-12 grid-flow-row lg:max-w-none lg:grid-cols-3 lg:grid-rows-3">
                    {isLoaded ? (<>
                        {loadedPosts instanceof Object && Object.keys(loadedPosts).length > 0 ? (<>
                            {Object.values(loadedPosts).map((resource) => {
                                return (
                                    <>
                                    <div className="lg:flex flex-col overflow-hidden rounded-lg hidden " style={{'max-height': '300px'}}>
                                        <div className="flex-shrink-0">
                                            <picture>
                                                {resource.post_thumbnail ? (<img width="1600" height="1067" src={resource.post_thumbnail} className="lg:rounded-lg lg:rounded-br-[60px] bg-cover wp-post-image" alt="" decoding="async" loading="lazy"  />) : (<div className="placeholder bg-purple-100 lg:rounded-br-[60px]" style={{"min-width" : "255px", "min-height" : "170px"}} />)}
                                            </picture>
                                        </div>
                                        <div className="flex flex-1 flex-col justify-between bg-white">
                                            <div className="flex-1">
                                                <a href="#" className="mt-2 block">
                                                    <p className="text-xl font-semibold text-black">{resource?.post_title?.replace(/<\/?[^>]+(>|$)/g, "")?.replace(/\&nbsp;/g, '')}</p>
                                                </a>
                                            </div>
                                            <div className="mt-6 flex items-center">
                                                <div className="">
                                                    <div className="flex space-x-1 text-sm text-black">
                                                        <a href={`/${resource.post_name}`} className="inline-flex w-full items-center py-2 text-base font-medium text-brand-purple hover:font-semibold sm:w-auto">Read More<svg className="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {/* Two components because tailwind is breaking right now so style is required for max height. */}
                                    <div className="flex flex-col overflow-hidden rounded-lg lg:hidden ">
                                        <div className="flex-shrink-0">
                                            <picture>
                                                {resource.post_thumbnail ? (<img width="1600" height="1067" src={resource.post_thumbnail} className="lg:rounded-lg lg:rounded-br-[60px] bg-cover wp-post-image" alt="" decoding="async" loading="lazy"  />) : (<div className="placeholder bg-purple-100 lg:rounded-br-[60px]" style={{"min-width" : "255px", "min-height" : "170px"}} />)}
                                            </picture>
                                        </div>
                                        <div className="flex flex-1 flex-col justify-between bg-white">
                                            <div className="flex-1">
                                                <a href="#" className="mt-2 block">
                                                    <p className="text-xl font-semibold text-black">{resource?.post_title?.replace(/<\/?[^>]+(>|$)/g, "")?.replace(/\&nbsp;/g, '')}</p>
                                                </a>
                                            </div>
                                            <div className="mt-6 flex items-center">
                                                <div className="">
                                                    <div className="flex space-x-1 text-sm text-black">
                                                        <a href={`/${resource.post_name}`} className="inline-flex w-full items-center py-2 text-base font-medium text-brand-purple hover:font-semibold sm:w-auto">Read More<svg className="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </>
                                )
                            }
                            )}</>) : <></>}
                    </>) : <>
                        {resourceArr.map((resource) => {
                                return (
                                    <div className="flex flex-col overflow-hidden rounded-lg bg-purple-100" style={{"min-width": "255px", "min-height": "277px"}} />
                                )
                            }
                            )}
                    </>}
                </div>
                <div className="c-mt-resources-filters hidden lg:block lg:flex-1" style={{ "min-width": "255px" }}>
                    <div className="sideshow bg-purple-100 rounded-lg hidden lg:block min-h-96 w-full p-4">
                        <div>
                            <h2 class="text-[22px] mb-5">Filter</h2>
                            <label class="screen-reader-text" for="s">Search for:</label>
                            <p class="text-[16px] ">Topic</p>
                            <select class="rounded-lg ring-0.5 ring-gray-100 my-2 w-full" name="" id="" value={selectedTag} onChange={(event)=>{ console.log(event.target.value); setSelectedTag(()=>`${event.target.value}`)}}>
                                <option class="text-gray-100" value="All Topics" selected={selectedTag == "All Topics"}>All Topics</option>
                                {tags.map((tag)=>{
                                    return (<option class="text-gray-100" value={tag.term_id} selected={selectedTag == tag.term_id}>{tag.name}</option>)
                                })}
                            </select>
                        </div>
                        {(attributes.category == "all" || attributes.category == -1) ? (<div class="cat-checkbox">
                            <p class="text-[16px] border-b-2 border-gray-300 pt-2 pb-1">Type</p>
                            <ul class="mt-2 " name="" id="">
                                {Object.values(categories).map((category) => {
                                    return (<li class="my-2.5"><input type="checkbox" id={category.cat_ID} name={category.cat_name} value={category.cat_ID} checked={selectedCategories.includes(`${category.cat_ID}`)} onChange={(event)=>{ console.log(event.target.value); selectCategory(event.target.value)}} /><label class="pl-2" for={category.cat_ID}>{category.cat_name}</label></li>)
                                })}
                            </ul>
                        </div>) : <></>}
                    </div>
                    <div class="bg-blue-300 my-10 rounded">
                        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                            <h2 class="inline text-3xl font-bold tracking-tight text-black sm:block sm:text-4xl"> Subscribe to our blog</h2>
                            <p class="inline text-3xl font-bold tracking-tight text-indigo-600 sm:block sm:text-4xl">get our latest posts in your email</p>
                            <form class="mt-8">
                                <label for="email-address" class="sr-only">Enter your email</label>
                                <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full rounded-md border-gray-300 px-5 py-3 placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs" placeholder="Enter your email" />
                                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                    <button type="submit" class="flex w-full items-center justify-center rounded-full border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {maxPages > 1 ? (<div className='c-mt-resourcepager'>
                <ul
                    className="pagination-container flex flex-row mt-4 justify-center"
                >
                    {/* Left navigation arrow */}
                    {currentPage > 1 ? (<li
                        className='previous-button px-2 py-1 cursor-pointer rounded bg-gray-200 mr-2'
                        onClick={onPrevious}
                    >
                        <div className="arrow left" >
                            Back
                        </div>
                    </li>) : <></>}
                    {paginationRange.map(pageNumber => {


                        // If the pageItem is a DOT, render the DOTS unicode character
                        if (pageNumber === 'DOTS') {
                            return <li className="pagination-item dots px-2 py-1 mr-2">&#8230;</li>;
                        }

                        // Render our Page Pills
                        return (
                            <li
                                className={`pagination-item px-2 py-1 cursor-pointer rounded mr-2 ${pageNumber == currentPage ? "selected-page" : "unselected-page"}`}
                                onClick={() => setCurrentPage(()=>{ return pageNumber})}
                            >
                                {pageNumber}
                            </li>
                        );
                    })}
                    {/*  Right Navigation arrow */}
                    {currentPage < maxPages ? (<li
                        className="next-button px-2 py-1 cursor-pointer bg-gray-200 mr-2"
                        onClick={onNext}
                    >
                        <div className="arrow right" >Next</div>
                    </li>) : <></>}
                </ul>
            </div>) : <></>}
        </>
    );
}

const ResourceListingWrapper = (props) => {
    const { attributes } = props;
    const [isModalOpen, setIsModalOpen] = useState(false);
    const toggleModal = useCallback(
        () => setIsModalOpen(prevState => !prevState),
        []
    );

    return (
        <div className="mt-block-user-card lg:mx-auto lg:max-w-7xl lg:px-8" data-mt-attributes={attributes}>
            <ResourceListing attributes={attributes} toggleModal={toggleModal} isModalOpen={isModalOpen} />
        </div>
    )
}

window.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.mt-block-user-card-wrapper');
    console.log("Cards loaded?", cards);
    if (cards) {
        Array.from(cards).forEach(card => {
            const attributes = JSON.parse(card.dataset.mtAttributes)
            console.log("attributes", attributes);
            ReactDOM.hydrate(
                <ResourceListingWrapper attributes={attributes} />,
                card
            )
        })
    }
})