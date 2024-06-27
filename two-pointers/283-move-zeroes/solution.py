class Solution(object):
    def moveZeroes(self, nums):
        """
        :type nums: List[int]
        :rtype: None Do not return anything, modify nums in-place instead.
        """
        left = right = 0
        n = len(nums)
        while right < n:
            if nums[right] == 0:
                right += 1
                continue

            if left != right:
                nums[left], nums[right] = nums[right], nums[left]

            left += 1
            right += 1
