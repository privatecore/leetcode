class Solution(object):
    def findPeakElement(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        n = len(nums)
        left = 0
        right = n - 1
        # average performance O(log n) as problem asks
        # the only tricky part is comparison:
        # we dont actually need to compare if element is set,
        # just value of the calculated index (i)
        while left <= right:
            i = (left + right) >> 1
            # i + 1 > n -1 (+inf)
            if i > n - 2 or nums[i] <= nums[i + 1]:
                left = i + 1
            # i - 1 < 0 (-inf)
            elif i < 1 or nums[i] <= nums[i - 1]:
                right = i - 1
            else:
                break

        return i
