<?php

namespace Store\Ecommerce\Block;

use Magento\Framework\Cache\LockGuardedCacheLoader;
use Magento\Framework\ObjectManagerInterface;

class Context extends \Magento\Framework\View\Element\Template\Context
{
    /**
     * @var \Store\Ecommerce\Helper\Data
     */
    protected $_devToolHelper;

    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var \Store\Ecommerce\Model\Config
     */
    protected $_config;

    /**
     * @var  \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @var \Magento\Framework\UrlFactory
     */
    protected $_urlFactory;

    public function __construct(\Magento\Framework\App\RequestInterface $request,
                                \Magento\Framework\View\LayoutInterface $layout,
                                \Magento\Framework\Event\ManagerInterface $eventManager,
                                \Magento\Framework\UrlInterface $urlBuilder,
                                \Magento\Framework\App\CacheInterface $cache,
                                \Magento\Framework\View\DesignInterface $design,
                                \Magento\Framework\Session\SessionManagerInterface $session,
                                \Magento\Framework\Session\SidResolverInterface $sidResolver,
                                \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
                                \Magento\Framework\View\Asset\Repository $assetRepo,
                                \Magento\Framework\View\ConfigInterface $viewConfig,
                                \Magento\Framework\App\Cache\StateInterface $cacheState,
                                \Psr\Log\LoggerInterface $logger,
                                \Magento\Framework\Escaper $escaper,
                                \Magento\Framework\Filter\FilterManager $filterManager,
                                \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate,
                                \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
                                \Magento\Framework\Filesystem $filesystem,
                                \Magento\Framework\View\FileSystem $viewFileSystem,
                                \Magento\Framework\View\TemplateEnginePool $enginePool,
                                \Magento\Framework\App\State $appState,
                                \Magento\Store\Model\StoreManagerInterface $storeManager,
                                \Magento\Framework\View\Page\Config $pageConfig,
                                File\Resolver $resolver,
                                File\Validator $validator,
                                \Store\Ecommerce\Helper\Data $_devToolHelper,
                                \Magento\Framework\Registry $registry,
                                \Store\Ecommerce\Model\Config $_config,
                                ObjectManagerInterface $_objectManager,
                                 \Magento\Framework\UrlFactory $_urlFactory)
    {
        parent::__construct($request,
            $layout,
            $eventManager,
            $urlBuilder,
            $cache,
            $design,
            $session,
            $sidResolver,
            $scopeConfig,
            $assetRepo,
            $viewConfig,
            $cacheState,
            $logger,
            $escaper,
            $filterManager,
            $localeDate,
            $inlineTranslation,
            $filesystem,
            $viewFileSystem,
            $enginePool,
            $appState,
            $storeManager,
            $pageConfig,
            $resolver,
            $validator,
            $lockQuery);

    }

}
