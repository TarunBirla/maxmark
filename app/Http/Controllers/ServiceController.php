<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the specified service page.
     */
    public function show($slug)
    {
        $services = $this->getServicesData();

        if (!array_key_exists($slug, $services)) {
            abort(404, 'Service Not Found');
        }

        $service = $services[$slug];
        $allServices = $services;

        return view('services.show', compact('service', 'allServices'));
    }

    /**
     * Master dataset for all 8 construction & building services.
     */
    private function getServicesData(): array
    {
        return [
            'loft-conversions' => [
                'slug' => 'loft-conversions',
                'number' => '01',
                'title' => 'Loft Conversions',
                'eyebrow' => 'Maximize Roof Space',
                'summary' => 'Turn wasted roof space into a bedroom, office or bathroom that adds real resale value.',
                'overview' => 'A loft conversion is one of the smartest ways to add significant living space and property value to your London home without extending your building footprint. Whether you need a master bedroom suite with an en-suite bathroom, a quiet home office, or a children\'s playroom, our team manages the entire process from structural calculations and architectural drawings to full completion.',
                'features' => [
                    'Dormer, Hip-to-Gable, Mansard & Velux Conversions',
                    'Full Structural Calculations & Building Control Approvals',
                    'Bespoke Staircase Craftsmanship & Layout Design',
                    'Integrated En-suite Bathrooms & Custom Storage',
                    'High-grade Thermal & Acoustic Insulation Standards',
                    'Completed with Fixed Price Guarantee & 5-Year Guarantee'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Site Visit & Survey', 'desc' => 'We measure your head height, roof pitch, and structural timbers to outline layout options.'],
                    ['step' => '02', 'title' => 'Plans & Approvals', 'desc' => 'Our architects finalize drawings, submit Permitted Development / Planning apps, and structural specs.'],
                    ['step' => '03', 'title' => 'Structural Build', 'desc' => 'Steel beams installed, roof opened, floor joists reinforced, and dormers constructed cleanly.'],
                    ['step' => '04', 'title' => 'Fit-Out & Finish', 'desc' => 'Plastering, electrical, plumbing, stair installation, and final sign-off by Building Control.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1200&q=80', 'title' => 'Master Loft Bedroom', 'size' => 'big', 'caption' => 'Spacious master bedroom with dormer window'],
                    ['url' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=800&q=80', 'title' => 'Loft En-Suite', 'size' => 'medium', 'caption' => 'Luxury shower room built under roof pitch'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80', 'title' => 'Velux Skylight Office', 'size' => 'small', 'caption' => 'Natural sunlit home office conversion'],
                    ['url' => 'https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?auto=format&fit=crop&w=800&q=80', 'title' => 'Bespoke Staircase', 'size' => 'medium', 'caption' => 'Custom timber stairs seamlessly matching existing hallway'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=80', 'title' => 'Dormer Extension', 'size' => 'big', 'caption' => 'Full-width rear dormer providing maximum headroom'],
                    ['url' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80', 'title' => 'Fitted Eaves Storage', 'size' => 'small', 'caption' => 'Clever custom wardrobe solutions built into eaves'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80', 'title' => 'Contemporary Loft Suite', 'size' => 'medium', 'caption' => 'Open plan loft living with Juliette balcony'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Structural Steel Fitting', 'size' => 'small', 'caption' => 'Precision steel installation for roof load support'],
                    ['url' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=1200&q=80', 'title' => 'Hip to Gable Framing', 'size' => 'big', 'caption' => 'Exterior gable wall extension framing'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=800&q=80', 'title' => 'Insulated Attic Room', 'size' => 'medium', 'caption' => 'High-grade PIR insulation before plasterboarding'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=80', 'title' => 'Velux Window Array', 'size' => 'small', 'caption' => 'Triple Velux roof windows bringing light down stairwell'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=80', 'title' => 'Finished Kids Loft Suite', 'size' => 'medium', 'caption' => 'Cozy twin bedroom conversion']
                ]
            ],
            'house-extensions' => [
                'slug' => 'house-extensions',
                'number' => '02',
                'title' => 'House Extensions',
                'eyebrow' => 'Expand Living Space',
                'summary' => 'Single and double-storey extensions designed to extend your living space, not your stress.',
                'overview' => 'Unlock the full potential of your property with a professionally built house extension. From spacious open-plan kitchen diners and side-return extensions to wrap-around double storey builds, MaxMark Builders delivers seamless extensions tailored to your lifestyle. We ensure structural harmony with your existing building while creating modern, sun-filled living spaces.',
                'features' => [
                    'Single & Double Storey Rear Extensions',
                    'Side-Return & Wrap-Around Kitchen Extensions',
                    'Structural Steel Beam Open-Plan Knockthroughs',
                    'Bi-fold, Crittall & Sliding Glass Door Installations',
                    'Flat Roof Lightboxes & Lantern Sky PODs',
                    'Full Project Management & Fixed Schedule Assurance'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Architectural Consult', 'desc' => 'We review your site boundary, drainage, and property goals to suggest optimal extension footprints.'],
                    ['step' => '02', 'title' => 'Planning & Party Wall', 'desc' => 'Handling planning submissions, party wall notices, and Thames Water build-over agreements.'],
                    ['step' => '03', 'title' => 'Groundworks & Shell', 'desc' => 'Excavating footings, pouring concrete foundations, laying brickwork shell and installing RSJ steel beams.'],
                    ['step' => '04', 'title' => 'Glazing & Interior', 'desc' => 'Fitting roof lanterns, bi-folds, underfloor heating, screeding, plastering, and interior finish.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Rear Kitchen Extension', 'size' => 'big', 'caption' => 'Full width rear extension with Crittall glass doors'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Side Return Extension', 'size' => 'medium', 'caption' => 'Victorian side return with glass roof panel'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80', 'title' => 'Roof Lantern POD', 'size' => 'small', 'caption' => 'Frameless glass roof lantern flooded with sunlight'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=80', 'title' => 'Bi-fold Patio Transition', 'size' => 'medium', 'caption' => 'Flush threshold bi-folding doors connecting garden to kitchen'],
                    ['url' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=1200&q=80', 'title' => 'Double Storey Build', 'size' => 'big', 'caption' => 'Two-floor brick extension expanding ground floor and bedroom'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80', 'title' => 'Steel Beam RSJ Fitting', 'size' => 'small', 'caption' => 'Heavy structural steel erection for wall removal'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=800&q=80', 'title' => 'Open Plan Living Room', 'size' => 'medium', 'caption' => 'Seamless open plan family zone'],
                    ['url' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80', 'title' => 'Foundations & Slab', 'size' => 'small', 'caption' => 'Engineered trench foundations and insulated concrete slab'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200&q=80', 'title' => 'Wrap-Around Extension', 'size' => 'big', 'caption' => 'Wrap-around ground floor extension with zinc roof details'],
                    ['url' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=800&q=80', 'title' => 'Underfloor Heating', 'size' => 'medium', 'caption' => 'Water underfloor heating pipes installed before screeding'],
                    ['url' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80', 'title' => 'Architectural Brickwork', 'size' => 'small', 'caption' => 'Matched London stock brickwork finish'],
                    ['url' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80', 'title' => 'Garden Lounge Extension', 'size' => 'medium', 'caption' => 'Light-filled garden lounge zone']
                ]
            ],
            'building-construction' => [
                'slug' => 'building-construction',
                'number' => '03',
                'title' => 'Building & Construction',
                'eyebrow' => 'Structural Work & New Builds',
                'summary' => 'Structural work, groundworks and new-builds handled by one accountable team from footings up.',
                'overview' => 'MaxMark Builders is a complete main contractor providing end-to-end building and structural construction services across London. From structural steelwork, underpinning, and basement excavations to groundworks, blockwork shell construction, and timber framing, our experienced tradesmen execute all heavy structural elements with precision and engineering integrity.',
                'features' => [
                    'New Build Residential Developments & Outbuildings',
                    'Underpinning, Foundation Pouring & Trench Excavations',
                    'Structural Alterations, Load-Bearing Wall Removals & Steel Erection',
                    'Chimney Breast Removals & Structural Restraint Strapping',
                    'Bricklaying, Stonework & Reinforced Concrete Works',
                    'Comprehensive Building Regulations Sign-off & Guarantees'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Structural Appraisal', 'desc' => 'Site inspection alongside structural engineers to calculate loads and foundation specs.'],
                    ['step' => '02', 'title' => 'Ground Excavation', 'desc' => 'Site clearance, trench digging, drainage prep, and concrete footings pour.'],
                    ['step' => '03', 'title' => 'Structural Erection', 'desc' => 'Blockwork shell, cavity wall insulation, timber joisting, and steel beam placement.'],
                    ['step' => '04', 'title' => 'Wind & Watertight Shell', 'desc' => 'Roof truss framing, tiling, felt membrane, and external masonry completion.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80', 'title' => 'New Build Construction Site', 'size' => 'big', 'caption' => 'Full structural new build from ground foundations up'],
                    ['url' => 'https://images.unsplash.com/photo-1541888946425-d0fbb186a5b3?auto=format&fit=crop&w=800&q=80', 'title' => 'Structural Bricklaying', 'size' => 'medium', 'caption' => 'Precision brick and blockwork cavity wall construction'],
                    ['url' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80', 'title' => 'Steel Framework Erection', 'size' => 'small', 'caption' => 'Heavy duty steel beam framework for open plan structure'],
                    ['url' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80', 'title' => 'Foundation Concrete Pour', 'size' => 'medium', 'caption' => 'Inspected trench foundations poured to building regulations'],
                    ['url' => 'https://images.unsplash.com/photo-1535732820275-9ffd998cac22?auto=format&fit=crop&w=1200&q=80', 'title' => 'Roof Timber Framing', 'size' => 'big', 'caption' => 'Structural roof rafters and timber truss assembly'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80', 'title' => 'Underpinning Works', 'size' => 'small', 'caption' => 'Sequential mass concrete underpinning for period walls'],
                    ['url' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=800&q=80', 'title' => 'Load-Bearing Beam Support', 'size' => 'medium', 'caption' => 'Temporary acrow prop support during wall removal'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80', 'title' => 'Reinforced Concrete Slab', 'size' => 'small', 'caption' => 'Steel mesh reinforced concrete ground slab'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Architectural Stonework', 'size' => 'big', 'caption' => 'Natural stone detailing and facade construction'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Scaffolding Safety Rig', 'size' => 'medium', 'caption' => 'Fully licensed scaffolding setup for safe elevated working'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=800&q=80', 'title' => 'Ground Drainage System', 'size' => 'small', 'caption' => 'Subsurface foul and surface water drainage pipework'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=80', 'title' => 'Completed Watertight Shell', 'size' => 'medium', 'caption' => 'Finished structural shell ready for internal trades']
                ]
            ],
            'interior-renovation' => [
                'slug' => 'interior-renovation',
                'number' => '04',
                'title' => 'Interior Renovation',
                'eyebrow' => 'Full Internal Refits',
                'summary' => 'Full internal refits — plastering, flooring, joinery — finished to a standard that shows.',
                'overview' => 'Transform your living spaces with MaxMark Builders\' comprehensive interior renovation services. Whether you are modernizing a period Victorian townhouse, refurbishing a apartment, or redesigning room layouts, we combine top-tier joinery, smooth skim plastering, custom media walls, and luxury flooring to deliver immaculate, turn-key finishes.',
                'features' => [
                    'Complete House Refurbishments & Internal Reconfiguration',
                    'Bespoke Carpentry, Built-in Wardrobes & Custom Joinery',
                    'Drylining, Soundproofing Insulation & Smooth Skim Plastering',
                    'Hardwood, Herringbone Parquet & Porcelain Tile Flooring',
                    'Architectural Lighting Design & Feature Wall Panelling',
                    'Decorating, Painting & Fine Interior Woodwork Finishing'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Interior Assessment', 'desc' => 'Review room dimensions, non-structural wall alterations, and finish specifications.'],
                    ['step' => '02', 'title' => 'Strip-Out & First Fix', 'desc' => 'Careful demolition of old fittings, rewiring, plumbing rerouting, and subfloor prep.'],
                    ['step' => '03', 'title' => 'Plaster & Flooring', 'desc' => 'Boarding walls, acoustic insulation, multi-coat plastering, and engineered floor fitting.'],
                    ['step' => '04', 'title' => 'Joinery & Decorating', 'desc' => 'Installing skirts, doors, custom wardrobes, paint finishes, and final detailed snagging.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Open Plan Living Room Refit', 'size' => 'big', 'caption' => 'Luxury living room renovation with parquet flooring'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Herringbone Flooring', 'size' => 'medium', 'caption' => 'Precision laid oak herringbone floor with subtle brass inlay'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80', 'title' => 'Custom Built-in Alcove Units', 'size' => 'small', 'caption' => 'Handcrafted alcove cabinetry with LED strip lighting'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80', 'title' => 'Modern Bedroom Interior', 'size' => 'medium', 'caption' => 'Bespoke headboard wall panelling and warm ambient lighting'],
                    ['url' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1200&q=80', 'title' => 'Master Bedroom Suite', 'size' => 'big', 'caption' => 'Full master bedroom refit with integrated dressing area'],
                    ['url' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=800&q=80', 'title' => 'Plastering & Skimming', 'size' => 'small', 'caption' => 'Mirror-smooth plaster finish on ceiling and walls'],
                    ['url' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80', 'title' => 'Feature Media Wall', 'size' => 'medium', 'caption' => 'Contemporary TV media wall with acoustic slat paneling'],
                    ['url' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=800&q=80', 'title' => 'Bespoke Internal Doors', 'size' => 'small', 'caption' => 'Solid oak internal doors with brushed brass handles'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=1200&q=80', 'title' => 'Dressing Room Wardrobes', 'size' => 'big', 'caption' => 'Custom walk-in wardrobe with velvet lined drawers'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=80', 'title' => 'Staircase Renovation', 'size' => 'medium', 'caption' => 'Refurbished period staircase with glass balustrade'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=80', 'title' => 'Acoustic Ceiling Panels', 'size' => 'small', 'caption' => 'Soundproofing installation between floors'],
                    ['url' => 'https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?auto=format&fit=crop&w=800&q=80', 'title' => 'Hallway Renovation', 'size' => 'medium', 'caption' => 'Welcoming entrance hall with victorian floor tile restoration']
                ]
            ],
            'kitchens-bathrooms' => [
                'slug' => 'kitchens-bathrooms',
                'number' => '05',
                'title' => 'Kitchens & Bathrooms',
                'eyebrow' => 'Design-Led Fit-Outs',
                'summary' => 'Design-led kitchen and bathroom fit-outs, from layout planning to the final tile.',
                'overview' => 'The kitchen and bathroom are the heart and sanctuary of any modern home. MaxMark Builders creates stunning bespoke kitchens and spa-like luxury bathrooms crafted for both everyday practicality and elevated aesthetics. From marble quartz islands and handleless cabinetry to walk-in wet rooms and freestanding stone baths, we handle all plumbing, electrical, tiling, and joinery.',
                'features' => [
                    'Bespoke Kitchen Island & Cabinetry Installations',
                    'Quartz, Granite & Solid Wood Countertop Fitting',
                    'Luxury Walk-In Wet Rooms & Frameless Glass Enclosures',
                    'Freestanding Stone Baths, Concealed Valves & Rain Showers',
                    'Large Format Porcelain, Marble & Encaustic Tile Laying',
                    'Integrated Task Lighting, Under-Cabinet LED & Extractors'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Design & Layout', 'desc' => 'Detailed 3D floor plan layout, appliance selection, and tile sampling.'],
                    ['step' => '02', 'title' => 'Rip-Out & Plumbing', 'desc' => 'Removal of old units, first-fix plumbing, electrical feeds, and tanking wet areas.'],
                    ['step' => '03', 'title' => 'Installation & Tiling', 'desc' => 'Installing cabinetry/sanitaryware, precision wall & floor tiling, and quartz templating.'],
                    ['step' => '04', 'title' => 'Commissioning', 'desc' => 'Worktop installation, appliance connections, sealant work, and pressure testing.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=1200&q=80', 'title' => 'Contemporary Kitchen Island', 'size' => 'big', 'caption' => 'Open-plan kitchen island with waterfall quartz countertop'],
                    ['url' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=800&q=80', 'title' => 'Luxury Spa Bathroom', 'size' => 'medium', 'caption' => 'Marble tiled bathroom with freestanding tub and black brassware'],
                    ['url' => 'https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=800&q=80', 'title' => 'Walk-In Wet Room', 'size' => 'small', 'caption' => 'Frameless glass walk-in shower with rainfall ceiling head'],
                    ['url' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=800&q=80', 'title' => 'Shaker Style Kitchen', 'size' => 'medium', 'caption' => 'Navy blue shaker kitchen with brass handles and butler sink'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Handleless Modern Kitchen', 'size' => 'big', 'caption' => 'Matte grey handleless kitchen units with integrated Siemens appliances'],
                    ['url' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=800&q=80', 'title' => 'Floating Double Vanity', 'size' => 'small', 'caption' => 'Walnut floating vanity unit with double countertop basins'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Herringbone Tile Backsplash', 'size' => 'medium', 'caption' => 'Glazed metro tile backsplash in herringbone pattern'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80', 'title' => 'Concealed Shower Valves', 'size' => 'small', 'caption' => 'Thermostatic concealed valve in brushed gunmetal'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Breakfast Bar & Pendant Light', 'size' => 'big', 'caption' => 'Custom oak breakfast bar seating area'],
                    ['url' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=800&q=80', 'title' => 'Porcelain Floor Tiling', 'size' => 'medium', 'caption' => 'Large format 1200x600mm porcelain tile installation'],
                    ['url' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80', 'title' => 'Integrated Wine Cooler', 'size' => 'small', 'caption' => 'Dual-zone wine climate cabinet built into island'],
                    ['url' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80', 'title' => 'Compact Cloakroom Fit-out', 'size' => 'medium', 'caption' => 'Stylish downstairs toilet with botanical wallpaper and marble sink']
                ]
            ],
            'plumbing-heating' => [
                'slug' => 'plumbing-heating',
                'number' => '06',
                'title' => 'Plumbing & Heating',
                'eyebrow' => 'Certified Mechanical Systems',
                'summary' => 'Bathroom plumbing, boiler installs and heating systems that are built to just work.',
                'overview' => 'A reliable plumbing and heating system is vital for comfort, energy efficiency, and safety. MaxMark Builders delivers Gas Safe certified plumbing and heating solutions across London. From unvented hot water cylinders and high-efficiency combi boiler installations to water underfloor heating manifolds and smart thermostat controls, our mechanical team ensures optimal performance.',
                'features' => [
                    'Gas Safe Boiler Replacements & System Upgrades',
                    'Unvented Hot Water Cylinders (Megaflo Systems)',
                    'Water & Electric Underfloor Heating Installation',
                    'Complete Property Pipework Rerouting & First Fix',
                    'Designer Column Radiator & Towel Rail Fittings',
                    'Smart Thermostat Integration (Nest, Hive, Tado)'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'System Heat Loss Audit', 'desc' => 'Calculating heat output requirements and hot water demand for your property.'],
                    ['step' => '02', 'title' => 'First-Fix Pipework', 'desc' => 'Laying copper/PEX water feeds, waste pipes, gas supply lines, and UFH loops.'],
                    ['step' => '03', 'title' => 'Boiler & Cylinder Mount', 'desc' => 'Fitting high-efficiency boiler, cylinder, expansion vessel, and pump manifold.'],
                    ['step' => '04', 'title' => 'Testing & Certification', 'desc' => 'Powerflushing, pressure testing, Gas Safe registration, and client handover.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1200&q=80', 'title' => 'Unvented Cylinder System', 'size' => 'big', 'caption' => 'High-pressure unvented hot water cylinder setup'],
                    ['url' => 'https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=800&q=80', 'title' => 'Underfloor Heating Manifold', 'size' => 'medium', 'caption' => 'Multi-zone UFH manifold with flow meters'],
                    ['url' => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=800&q=80', 'title' => 'Boiler Installation', 'size' => 'small', 'caption' => 'Clean A-rated condensing combi boiler fitting'],
                    ['url' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80', 'title' => 'Copper Pipe Soldering', 'size' => 'medium', 'caption' => 'Neat copper pipework layout for bathroom first-fix'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Designer Column Radiators', 'size' => 'big', 'caption' => 'Cast-iron style column radiator installation'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Smart Heating Controls', 'size' => 'small', 'caption' => 'Smart wireless room thermostat setup'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80', 'title' => 'Heated Towel Rail', 'size' => 'medium', 'caption' => 'Matt black ladder towel warmer connected to central heating'],
                    ['url' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=800&q=80', 'title' => 'Waste Pipe Drainage', 'size' => 'small', 'caption' => 'Acoustic low-noise waste drainage installation'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Boiler Flue Terminal', 'size' => 'big', 'caption' => 'External flue terminal fitted cleanly through wall'],
                    ['url' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80', 'title' => 'Gas Supply Pipe', 'size' => 'medium', 'caption' => 'Traceable copper gas supply line with isolation valve'],
                    ['url' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=800&q=80', 'title' => 'System Powerflush', 'size' => 'small', 'caption' => 'Chemical powerflushing of existing radiator circuit'],
                    ['url' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80', 'title' => 'Instant Boiling Tap', 'size' => 'medium', 'caption' => '3-in-1 hot water tap tank installed under sink']
                ]
            ],
            'double-glazing-specialist' => [
                'slug' => 'double-glazing-specialist',
                'number' => '07',
                'title' => 'Double Glazing Specialist',
                'eyebrow' => 'A+ Rated Double Glazing & Window Installation',
                'summary' => 'Bespoke uPVC, wooden, and aluminium double glazed window & door supply and precision installation.',
                'overview' => 'MaxMark Builders provides comprehensive double glazing supply and installation services across London. From energy-efficient uPVC casement windows and authentic wooden box sashes to slimline architectural aluminium profiles, our fitters deliver exceptional thermal insulation, noise reduction, and high security.',
                'features' => [
                    'A+ Rated uPVC, Wooden & Aluminium Double Glazed Windows',
                    'Energy Efficient Low-E Glass with Argon Gas Fillings',
                    'Multi-Point PAS 24 Shoot-Bolt Locking Mechanisms',
                    'Bespoke Sash, Casement, Flush & Tilt-and-Turn Styles',
                    'Noise Reduction Acoustic Glass Installation',
                    '5-Year Workmanship Guarantee & FENSA Certification'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Site Survey & Measuring', 'desc' => 'Free home visit to take exact millimetre measurements and discuss style options.'],
                    ['step' => '02', 'title' => 'Precision Manufacturing', 'desc' => 'Custom fabrication of window frames, double glazed units, and hardware.'],
                    ['step' => '03', 'title' => 'Professional Installation', 'desc' => 'Clean removal of old frames and precision fitting with airtight weather seals.'],
                    ['step' => '04', 'title' => 'Sign-Off & Certification', 'desc' => 'Final inspection, smooth operation check, snagging cleanup, and guarantee issuance.']
                ],
                'gallery' => [
                    ['url' => '/s1.jpeg', 'title' => 'uPVC Casement Window Installation', 'size' => 'big', 'caption' => 'A+ Energy rated white uPVC casement window'],
                    ['url' => '/s2.jpeg', 'title' => 'Traditional Timber Box Sash', 'size' => 'medium', 'caption' => 'Authentic wooden sash window restoration'],
                    ['url' => '/s3.jpeg', 'title' => 'Slimline Aluminium Frames', 'size' => 'small', 'caption' => 'Contemporary aluminium profile with maximum glass area'],
                    ['url' => '/s4.jpeg', 'title' => 'Flush Fit Window System', 'size' => 'medium', 'caption' => 'Flush sash windows sitting flush within outer frame'],
                    ['url' => '/s5.jpeg', 'title' => 'Bay & Bow Glazing Refit', 'size' => 'big', 'caption' => 'Multi-section bay window flooded with natural light'],
                    ['url' => '/s6.jpeg', 'title' => 'Acoustic Double Glazed Glass', 'size' => 'small', 'caption' => 'High noise reduction acoustic glass installation'],
                    ['url' => '/s7.jpeg', 'title' => 'Cottage Style Georgian Bars', 'size' => 'medium', 'caption' => 'Rustic cottage window with internal astragal bars']
                ]
            ],
            'electrical-works' => [
                'slug' => 'double-glazing-specialist',
                'number' => '07',
                'title' => 'Double Glazing Specialist',
                'eyebrow' => 'A+ Rated Double Glazing & Window Installation',
                'summary' => 'Bespoke uPVC, wooden, and aluminium double glazed window & door supply and precision installation.',
                'overview' => 'MaxMark Builders provides comprehensive double glazing supply and installation services across London. From energy-efficient uPVC casement windows and authentic wooden box sashes to slimline architectural aluminium profiles, our fitters deliver exceptional thermal insulation, noise reduction, and high security.',
                'features' => [
                    'A+ Rated uPVC, Wooden & Aluminium Double Glazed Windows',
                    'Energy Efficient Low-E Glass with Argon Gas Fillings',
                    'Multi-Point PAS 24 Shoot-Bolt Locking Mechanisms',
                    'Bespoke Sash, Casement, Flush & Tilt-and-Turn Styles',
                    'Noise Reduction Acoustic Glass Installation',
                    '5-Year Workmanship Guarantee & FENSA Certification'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Site Survey & Measuring', 'desc' => 'Free home visit to take exact millimetre measurements and discuss style options.'],
                    ['step' => '02', 'title' => 'Precision Manufacturing', 'desc' => 'Custom fabrication of window frames, double glazed units, and hardware.'],
                    ['step' => '03', 'title' => 'Professional Installation', 'desc' => 'Clean removal of old frames and precision fitting with airtight weather seals.'],
                    ['step' => '04', 'title' => 'Sign-Off & Certification', 'desc' => 'Final inspection, smooth operation check, snagging cleanup, and guarantee issuance.']
                ],
                'gallery' => [
                    ['url' => '/s1.jpeg', 'title' => 'uPVC Casement Window Installation', 'size' => 'big', 'caption' => 'A+ Energy rated white uPVC casement window'],
                    ['url' => '/s2.jpeg', 'title' => 'Traditional Timber Box Sash', 'size' => 'medium', 'caption' => 'Authentic wooden sash window restoration'],
                    ['url' => '/s3.jpeg', 'title' => 'Slimline Aluminium Frames', 'size' => 'small', 'caption' => 'Contemporary aluminium profile with maximum glass area'],
                    ['url' => '/s4.jpeg', 'title' => 'Flush Fit Window System', 'size' => 'medium', 'caption' => 'Flush sash windows sitting flush within outer frame'],
                    ['url' => '/s5.jpeg', 'title' => 'Bay & Bow Glazing Refit', 'size' => 'big', 'caption' => 'Multi-section bay window flooded with natural light'],
                    ['url' => '/s6.jpeg', 'title' => 'Acoustic Double Glazed Glass', 'size' => 'small', 'caption' => 'High noise reduction acoustic glass installation'],
                    ['url' => '/s7.jpeg', 'title' => 'Cottage Style Georgian Bars', 'size' => 'medium', 'caption' => 'Rustic cottage window with internal astragal bars']
                ]
            ],
            'external-works' => [
                'slug' => 'external-works',
                'number' => '08',
                'title' => 'External Works',
                'eyebrow' => 'Roofing, Patios & Facades',
                'summary' => 'Driveways, patios, roofing and render — the finishing touches that frame the whole job.',
                'overview' => 'First impressions matter. MaxMark Builders offers complete external building, roofing, and hard landscaping services to enhance your home\'s curb appeal and weatherproof protection. From slate roof tile replacements and silicone render finishes to porcelain paving patios and block-paved driveways, we transform property exteriors.',
                'features' => [
                    'Slate, Clay Tile & GRP Flat Roofing Solutions',
                    'K-Rend & Silicone Breathable External Rendering',
                    'Porcelain & Natural Stone Patio Paving Layouts',
                    'Block Paving & Resin-Bound Driveway Construction',
                    'Timber & Composite Garden Decking & Fencing',
                    'UPVC / Aluminium Fascias, Soffits & Guttering Upgrades'
                ],
                'process' => [
                    ['step' => '01', 'title' => 'Exterior Site Survey', 'desc' => 'Inspecting brickwork, roof pitch, drainage falls, and access requirements.'],
                    ['step' => '02', 'title' => 'Sub-Base & Prep', 'desc' => 'Stripping old tiles/surfaces, excavating sub-base, and applying membrane.'],
                    ['step' => '03', 'title' => 'Installation & Render', 'desc' => 'Laying paving, battening roof, fitting felt/tiles, or applying basecoat render.'],
                    ['step' => '04', 'title' => 'Sealing & Cleanup', 'desc' => 'Silicone topcoat render finish, patio jointing, site pressure wash, and sign-off.']
                ],
                'gallery' => [
                    ['url' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=80', 'title' => 'Modern House Exterior', 'size' => 'big', 'caption' => 'Rendered house facade with timber cladding accents'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80', 'title' => 'Porcelain Patio Paving', 'size' => 'medium', 'caption' => 'Outdoor porcelain tile patio with concealed slot drain'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80', 'title' => 'Slate Tile Roof', 'size' => 'small', 'caption' => 'Spanish natural slate roof tile installation with lead flashing'],
                    ['url' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80', 'title' => 'Block Paved Driveway', 'size' => 'medium', 'caption' => 'Permeable block paving driveway with charcoal border'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80', 'title' => 'Composite Garden Decking', 'size' => 'big', 'caption' => 'Low maintenance composite decking surrounding lawn'],
                    ['url' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=800&q=80', 'title' => 'Silicone K-Rend Finish', 'size' => 'small', 'caption' => 'Off-white silicone render on insulated external wall'],
                    ['url' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80', 'title' => 'Aluminium Seamless Guttering', 'size' => 'medium', 'caption' => 'Black powder-coated aluminium guttering and downpipes'],
                    ['url' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=800&q=80', 'title' => 'GRP Fiberglass Flat Roof', 'size' => 'small', 'caption' => 'Seamless GRP flat roof covering over extension'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=1200&q=80', 'title' => 'Brickwork Pointing', 'size' => 'big', 'caption' => 'Repointing Victorian brickwork with lime mortar'],
                    ['url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=80', 'title' => 'Outdoor Kitchen Terrace', 'size' => 'medium', 'caption' => 'Paved outdoor BBQ and dining terrace'],
                    ['url' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=80', 'title' => 'Cedar Batten Screen Fencing', 'size' => 'small', 'caption' => 'Western red cedar slatted privacy screen fence'],
                    ['url' => 'https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?auto=format&fit=crop&w=800&q=80', 'title' => 'Retaining Wall & Steps', 'size' => 'medium', 'caption' => 'Rendered garden retaining wall with integrated steps']
                ]
            ]
        ];
    }
}
